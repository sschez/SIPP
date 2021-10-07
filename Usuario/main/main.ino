#include "Celda.h"
#include "Vehiculo.h"
#include "Zona.h"

const int pinIR = 2;
const int ledR = 11;
const int ledV = 12;

const int monedas[] = {100, 200, 500, 1000, 2000, 5000, 10000, 20000, 50000};

Celda c(1,"provenza", pinIR);
Zona z("provenza", 4400);
Vehiculo v1(ledV, ledR, pinIR);

void setup() {
  Serial.begin(9600);

   pinMode(pinIR, INPUT);
   pinMode(ledR, OUTPUT);
   pinMode(ledV, OUTPUT);

   digitalWrite(ledR, LOW);
   digitalWrite(ledV, HIGH);

   attachInterrupt(0, cambiarLed, RISING);
}

//-----------------------------------------------------------------------------
void cambiarLed(){
  digitalWrite(ledV, LOW);
  digitalWrite(ledR, HIGH);
  c.establecerEstadoCelda();
}

String obtenerPlaca(){
  String placa = "";
  bool cond1 = true;
  char charT = ' ';
  
  while (true){
    Serial.println("Ingrese la placa del vehículo");

    while(Serial.available() == 0){};

    placa = Serial.readStringUntil("\n"); 
    placa.toUpperCase();
    placa.remove(placa.length() - 1);
    
    if (placa.length() == 6){
      cond1 = true;
      for (int i = 0; i<3; i++){
        charT = placa.charAt(i);
        if(charT >= '0' && charT <= '9'){
          cond1 = false;
          break;
        }
      }
      if (cond1){
        for (int i = 3; i<6; i++){
          charT = placa.charAt(i);
          if(charT >= 'A' && charT <= 'Z'){
            cond1 = false;
            break;
          }
        }
      }
    } else {
      cond1 = false;
    }

    if (cond1){break;}
    
    Serial.println("Placa incorrecta, intente nuevamente");
  }
  
  return placa;
}

int obtenerCelda(){
  int celda = -1;
  while (true){
    Serial.println("Por favor elija un número de celda: ");
    while (Serial.available() == 0){};

    celda = Serial.readString().toInt();

    if (celda == c.getNumCelda()){
      if (c.getEstadoCelda()){
        break;
      }
    }

    Serial.println("Ingrese una celda válida.");
  }

  return celda;
}

bool salidaVehiculo(){
  bool val = false;
  String placa = "";

  while (true){
    placa = obtenerPlaca();
    if (placa.equals(v1.getPlaca())){
      val = true;
      break;
    }

    Serial.println("Placa de vehiculo no registrada \nIntente nuevamente.");
  }

  return val;    
}

void registrarPago(int valorPagar){
  Serial.println("Ingrese el método de pago: ");
  bool cond1 = false;
  
  while (true){
    Serial.println("Ingrese 1 para pagar por tarjeta.");
    Serial.println("Ingrese 2 para pagar con efectivo.");
    while(Serial.available() == 0){};

    int i = Serial.readString().toInt();
    
    switch (i){
      case 1:
        Serial.print("valor a pagar: ");
        Serial.println(valorPagar);
        Serial.println("Unda enter para continuar");
        while(Serial.available() == 0){};
        Serial.read();
        Serial.println("Muchas gracias!");
        cond1 = true;
        break;

      case 2:
        pagoEfectivo(valorPagar);
        cond1 = true;
        break;

      default:
        Serial.println("Ingrese una opción válida.");
    }

    if(cond1){break;}
  }
}

void pagoEfectivo(int valorPagar){
  int ingresoP = 0;
  
  while(valorPagar > 0){
    Serial.print("Cantidad a pagar: ");
    Serial.println(valorPagar);
    Serial.println("Valor de moneda o billete a utilzar: ");

    while(Serial.available() == 0);

    ingresoP = Serial.readString().toInt();

    if (busquedad(ingresoP) >= 0){
      valorPagar = valorPagar - ingresoP;
    } else {
      Serial.println("Ingrese una moneda valida.");
    }
  }

  if (valorPagar < 0){
    Serial.print("Devuelta: ");
    Serial.println(valorPagar * -1);
  }

  Serial.println("Muchas gracias!");
}

int busquedad(int num){
  int j = -1;
  for (int i = 0; i <9; i++){
    if(monedas[i] == num){
      j = i;
      break;
    }
  }
  return j;
}

void entregarFactura(int valPago){
  bool cond1 = false;
    while(true){
      Serial.println("Como desea ver el recibo?");
      Serial.println("Ingrese 1 para verlo en pantalla");
      Serial.println("Ingrese 2 para imprimir recibo");

      while(Serial.available() == 0){};

      int i = Serial.readString().toInt();

      switch(i){
        case 1:
          Serial.print("Zona: ");
          Serial.println(z.getIdZona());
          Serial.print("Cela: ");
          Serial.println(c.getNumCelda());
          Serial.println("ID: 100156476");
          Serial.print("Placa del vehiculo: ");
          Serial.println(v1.getPlaca());
          int tTotal = v1.getHoraSalida() - v1.getHoraIngreso();
          Serial.print("Tiempo total: ");
          Serial.println((tTotal/3600000) + 1);
          Serial.print("Valor a pagar: ");
          Serial.println(valPago);
          Serial.println("Concepto: Tasa de uso Z.E.R");
          Serial.println("Tipo: Carro");
          Serial.println("Unda enter para continuar");
          while(Serial.available() == 0){};
          Serial.read();
          cond1 = true;
          break;

        case 2:
          Serial.println("Porfavor retire el recibo.");
          Serial.println("Muchas gracias por contar con nosotros!");
          Serial.println("Unda enter para continuar");
          while(Serial.available() == 0){};
          Serial.read();
          cond1 = true;
          break;

        default:
          Serial.println("Ingrese una opción válida");
      }

      if (cond1){break;}
    }
}

//-----------------------------------------------------------------------------

void loop() {
  Serial.println(z.getIdZona());
  Serial.print(" valor hora: ");
  Serial.println(z.getTarifaZona());
  Serial.println("Ingrese 1 para registrar vehiculo y 2 para retirar vehiculo: ");
  
  while(Serial.available() == 0){};

  int i = Serial.readString().toInt();

  if (i == 1){
      Serial.println("Celdas disponibles: ");
      Serial.print(c.getNumCelda());
      Serial.print(" estado: ");
      
      if (c.getEstadoCelda()){
        Serial.println("ocupado.");
      } else {
        Serial.println("disponible.");
      }
      
      int celdaV = obtenerCelda();
      String placaV = obtenerPlaca();

      v1.setPlaca(placaV);
      v1.setNumCelda(celdaV);
      v1.registrarIngreso();

      Serial.println("Disfrute de su estadia!");
  }else if(i == 2){
      bool cond2 = salidaVehiculo();
      if (cond2){
        Serial.print("Monto a pagar: ");
        v1.setHoraSalida(millis());
        int pago = v1.calcularPago(z.getTarifaZona());
        Serial.println(pago);
        registrarPago(pago);
        entregarFactura(pago); 
      }
  }else{
      Serial.println("\nPor favor ingrese una opción válida");
  }
}
