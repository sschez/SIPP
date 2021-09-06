#include "Celda.h"

Celda c(1,"provenza");

void setup() {
  Serial.begin(9600);
}

void loop() {
  c.establecerEstadoCelda();
  if(c.getEstadoCelda() == true){
    Serial.println("Celda ocupada");
     delay(2000);
    Serial.println("Barreras arriba");
  }
}
