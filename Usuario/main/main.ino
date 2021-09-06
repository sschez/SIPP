#include "../Modelo/Celda.h"

Celda c(1,"provenza");

void setup() {
  Serial.begin(9600);
}

void loop() {
  if(c.getEstadoCelda() == true){
    Serial.println("Celda ocupada");
    while(c.getEstadoRestriccion()== true){
      delay(2000);
      Serial.println("Barreras arriba");
      if(v.pagar() == true){
        c.setEstadoRestriccion();
      }
    }
  }
  c.establecerEstadoCelda();
}
