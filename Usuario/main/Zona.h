class Zona{
    public:
        Zona(String valueIdZona, int valuetarifaZona){
          estadoZona = true;
          idZona = valueIdZona;
          tarifaZona = valuetarifaZona;
        }
        bool getEstadoZona(){return estadoZona;}
        String getIdZona(){return idZona;}
        int getTarifaZona(){return tarifaZona;}

        void actualizarEstadoZona(){
            if(estadoZona=false){
              estadoZona=true;              
              }else{estadoZona=false;}
        }
        
        void actualizarEstadoTarifa(){
           
        }
 
    private:
        String idZona;
        bool estadoZona;
        int tarifaZona;
};
