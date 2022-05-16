<?php 
//Creamos la clase Profesor
    class Coche {
        //Atributos que son las propiedades del objeto
        public $Marca = 'Ford';
        public $Color = 'Azul';
        public $Velocidad = '200';

        // echo $nombre; no funciona

        //Métodos
        public function acelera($Velocidad){
            echo $Velocidad;
        }
    }
    $Auto = new Coche();//Creamos OBJETO
    echo gettype($Auto); //Muestra tipo "object"
    echo ' La marca del coche es ' . $Auto->Marca . ' ' . $Auto->Color . " con una altura de " . $Auto->Velocidad . 'Km.';
    $Auto->acelera("<br>Super velocidad");
    
?>