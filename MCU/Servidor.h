#include <ESP8266HTTPClient.h>

class Servidor{
  public:
    Servidor (char* host_){
      host = host_;
      HTTPClient http;
    }

    int enviarEstadoCelda(int estado, String numCelda){
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

  private:
    char* host;
    HTTPClient http;
}