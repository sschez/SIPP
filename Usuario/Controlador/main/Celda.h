class Celda{
    public:
        Celda(int valueNumCelda, String valueIdZona){
          numCelda = valueNumCelda;
          idZona = valueIdZona;
          estadoCelda = false;
          estadoRestriccion = false;
        }
        int getNumCelda(){return numCelda;}
        bool getEstadoCelda(){return estadoCelda;}
        bool getEstadoRestriccion(){return estadoRestriccion;}
        String getIdZona(){return idZona;}
        void establecerEstadoCelda(){
           // if(digitalRead(9)==0){
           if(Serial.read() == 'a'){
                estadoCelda = true;
                estadoRestriccion = true;
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
        bool estadoCelda;
        bool estadoRestriccion;
        String idZona;
};
