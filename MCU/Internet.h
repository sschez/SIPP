#include <ESP8266WiFi.h>

class Internet{
    public:
        Internet(const char* ssid_, const char* password_){
            ssid = ssid_;
            password = password_;
            contConexion = 0;
        }

        bool conectar(){
            WiFi.mode(WIFI_STA);
            WiFi.begin(ssid, password);

            while (WiFi.status() != WL_CONNECTED and contConexion < 50) {
                contConexion = contConexion + 1;
                delay(500);
                Serial.print(".");
            }

            if (contConexion < 50) {
                IPAddress ip(192, 168, 1, 156);
                IPAddress gateaway(192, 168, 1, 254);
                IPAddress subnet(255, 255, 255, 0);
                WiFi.config(ip, gateaway, subnet);

                Serial.println("");
                Serial.println("WiFi conectado");
                Serial.println(WiFi.localIP());

                return true;
            } else {
                Serial.println("\nError de conexion");
                return false;
            }
        }
    private:
        const char* ssid;
        const char* password;
        int contConexion;
};
