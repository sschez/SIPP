#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include "Servidor.h"
#include "Internet.h"

//Se incluyen los parametros del wifi y del host
const char* ssid = "CASA MARTINEZ BEDOYA";
const char* password = "SEGURIDAD1";
const char* host = "192.168.1.7";

Servidor servidor(host);
Internet internet(ssid, password);

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

  internet.conectar();
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

void loop() {
  if (digitalRead(pInf) == 0) {
    ledRGB(2);
    servidor.enviarEstadoCelda(2, idCelda);
  }
  ledRGB(0);
}
