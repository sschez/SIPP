class Vehiculo{
    public: 
        Vehiculo(int pinR, int pinV, int IR){
            placa = "";
            numCelda = "";
            horaIngreso = 0;
            horaSalida = 0;
            pinIR = IR;
            ledV = pinV;
            ledR = pinR;
        }
        
        String getPlaca(){return placa;}
        void setPlaca(String vPlaca){placa = vPlaca;}
        int getHoraIngreso(){return horaIngreso;}
        int getHoraSalida(){return horaSalida;}
        void setHoraSalida(int vOut){horaSalida = vOut;}
        int getNumCelda(){return numCelda;}
        void setNumCelda(int vCelda){numCelda = vCelda;}

        void registrarIngreso(){
            if (digitalRead(pinIR) == 1){
                horaIngreso = millis();
                digitalWrite(ledR, LOW);
                digitalWrite(ledV, HIGH);
            }
        }

        int calcularPago(int costo){
            int tTotal = horaIngreso - horaSalida;
            tTotal = (tTotal/3600000) + 1;
            return tTotal * costo;
        }

        void pagar(int pinV, int pinR){
            digitalWrite(ledV, LOW);
            digitalWrite(ledR, HIGH);
        }
        
    private:
        String placa;
        int horaIngreso;
        int horaSalida;
        int numCelda;
        int pinIR;
        int ledV;
        int ledR;
};
