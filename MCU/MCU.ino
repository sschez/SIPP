#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include "Celda.h"
#include "Vehiculo.h"
#include "Zona.h"

//Se incluyen los parametros del wifi y del host
const char* ssid = "CASA MARTINEZ BEDOYA";
const char* password = "SEGURIDAD1";
const char* host = "192.168.1.24";
const int port = 80;
const int watchdog = 5000;

int contconexion = 0;

uint8_t pRed = D7;
uint8_t pGreen = D6;
uint8_t pBlue = D5;

uint8_t pInf = D4;

String idCelda = "000001";


void setup() {
  //Se inician los pines que se van a utilizar para los actuadores y sensores
  pinMode(pRed, OUTPUT);
  pinMode(pGreen, OUTPUT);
  pinMode(pBlue, OUTPUT);
  digitalWrite(pRed, LOW);
  digitalWrite(pGreen, LOW);
  digitalWrite(pBlue, LOW);

  pinMode(pInf, INPUT);

  Serial.begin(9600);

  ledRGB(3);

  //Se inicia la conexión con internet
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED and contconexion < 50) {
    contconexion = contconexion + 1;
    delay(500);
    Serial.print(".");
  }

  if (contconexion < 50) {
    IPAddress ip(192, 168, 1, 156);
    IPAddress gateaway(192, 168, 1, 254);
    IPAddress subnet(255, 255, 255, 0);
    WiFi.config(ip, gateaway, subnet);

    Serial.println("");
    Serial.println("WiFi conectado");
    Serial.println(WiFi.localIP());
  } else {
    Serial.println("\nError de conexion");
  }
}

void ledRGB(int i) {
  if (i == 1) {
    digitalWrite(pRed, HIGH);
    digitalWrite(pGreen, LOW);
    digitalWrite(pBlue, LOW);
  } else if (i == 3) {
    digitalWrite(pRed, LOW);
    digitalWrite(pGreen, HIGH);
    digitalWrite(pBlue, LOW);
  } else if (i == 2) {
    digitalWrite(pRed, HIGH);
    digitalWrite(pGreen, HIGH);
    digitalWrite(pBlue, LOW);
  } else {
    digitalWrite(pRed, LOW);
    digitalWrite(pGreen, LOW);
    digitalWrite(pBlue, HIGH);
  }
}

void enviarDatos(int estado, String numCelda) {
  HTTPClient http;

  String full_url = "http://" + String(host) + "/SIPP/Usuario/visualizacion/models/recibirMCU.php?estadoCelda=" + String(estado) + "&idCelda=" + numCelda;
  http.begin(full_url);

  // Make request
  Serial.println("Making request to " + full_url);
  int httpCode = http.GET();
  if (httpCode > 0)
  {
    if (httpCode == HTTP_CODE_OK)
    {

      String payload = http.getString(); //Get the request response payload
      Serial.println("Request is OK! The server says: ");
      Serial.println(payload);
    }
    else
    {
      Serial.println("Error: httpCode was " + http.errorToString(httpCode));
    }
  }
  else
  {
    Serial.println("Request failed: " + http.errorToString(httpCode));
  }

  http.end(); //Close connection
  // And wait 5 seconds
  delay(5000);
}

void loop() {
  if (digitalRead(pInf) == 0) {
    ledRGB(2);
    enviarDatos(2, idCelda);
  }
  ledRGB(0);
}
