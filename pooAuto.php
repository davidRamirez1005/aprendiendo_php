<?php 

    class Auto{
        public $color;
        public $placa;
        public $modelo;


        public function getPlaca(){
            return $this->placa;
        }
        public function setPlaca($placa_){
            $this->placa=$placa_;
        }
        public function getColor(){
            return $this->color;
        }
        public function setColor($color_){
            $this->color=$color_;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo_){
            $this->modelo=$modelo_;
        }
    }
?>