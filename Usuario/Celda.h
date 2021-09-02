#ifndef Celda_h 
#define Celda_h
#include Arduino.h

class Celda{
    Celda(int valueNumCelda, String valueIdZona);
    public:
        void establecerEstado(int trigger, int echo);
        void permitirSalida();
        void restringirSalida();
    private:
        int numCelda;
        bool estadoCelda;
        bool estadoRestriccion;
        String idZona;
};
#endif