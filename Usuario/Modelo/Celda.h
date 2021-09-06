class Celda{
    Celda(int valueNumCelda, string valueIdZona){
        numCelda = valueNumCelda;
        idZona = valueIdZona;
        estadoCelda = false;
        estadoRestriccion = false;
    }
    public:
        int getNumCelda(){return numCelda;}
        bool getEstadoCelda(){return estadoCelda;}
        bool getEstadoRestriccion(){return estadoRestriccion;}
        string getIdZona(){return idZona;}
        void establecerEstadoCelda(){
            if(Serial.Read()==1){
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
        string idZona;
};


