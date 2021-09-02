#include "Arduino.h"
#include "Celda.h"

Celda::Celda(int valueNumCelda, String valueIdZona){
    numCelda = valueNumCelda;
    idZona = valueIdZona;
    estadoCelda = false;
    estadoRestriccion = false;
}

int Celda::getNumCelda(){return numCelda;}
bool Celda::getEstadoCelda(){return estadoCelda;}
bool Celda::getEstadoRestriccion(){return estadoRestriccion;}
String Celda::getIdZona(){return idZona;}

void Celda::establecerEstadoCelda(int trigger, int echo){
  float distancia, tiempo;
  digitalWrite(trigger, LOW);
  delayMicroseconds(2);
  digitalWrite(trigger, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigger, LOW);
  tiempo = pulseIn(echo, HIGH);
  distancia = tiempo / 58;
  if (distancia < 15)  estadoCelda = true;
}

void Celda::permitirSalida(){
    estadoRestriccion = false;
}

void Celda::restringirSalida(){
    estadoRestriccion = true;
}