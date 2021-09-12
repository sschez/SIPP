class Celda{
    public:
        Celda(int valueNumCelda, String valueIdZona, int pinSensor){
          numCelda = valueNumCelda;
          idZona = valueIdZona;
          estadoCelda = false;
          estadoRestriccion = false;
          IR = pinSensor;
        }
        int getNumCelda(){return numCelda;}
        bool getEstadoCelda(){return estadoCelda;}
        bool getEstadoRestriccion(){return estadoRestriccion;}
        String getIdZona(){return idZona;}
        void establecerEstadoCelda(){
            if(digitalRead(IR)==0){
                estadoCelda = true;
                estadoRestriccion = true;
            } else {
              estadoCelda = false;
            }
        }
        void permitirSalida(){
            estadoRestriccion = false;
        }
        void restringirSalida(){
            estadoRestriccion = true;
        }
    private:
        int numCelda;
        int IR;
        bool estadoCelda;
        bool estadoRestriccion;
        String idZona;
};
