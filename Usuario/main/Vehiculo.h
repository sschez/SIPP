#include <TimeLib.h>

class Vehiculo{
    public: 
        Vehiculo(String vPlaca, int vNum){
            placa = vPlaca;
            horaIngreso = 0;
            horaSalida = 0;
            numCelda = vNum;
        }
        
        String getPlaca(){return placa;}
        void setPlaca(String vPlaca){placa = vPlaca;}
        Time getHoraIngreso(){return horaIngreso;}
        Time getHoraSalida(){return horaSalida;}
        void setHoraSalida(Time vOut){horaSalida = vOut;}
        int getNumCelda(){return numCelda;}
        void setNumCelda(int vCelda){numCelda = vCelda;}

        
    private:
        String placa;
        Time horaIngreso;
        Time horaSalida;
        int numCelda
};