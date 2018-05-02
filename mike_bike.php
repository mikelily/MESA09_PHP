<?php
    class Bike {
        private $speed = 0;

        public function upSpeed(){
            $this->speed = ($this->speed < 1?1:$this->speed *1.2);
        }

        public function downSpeed(){
            $this->speed = ($this->speed < 1?0:$this->speed *0.7);
        }

        public function getSpeed(){
            return $this->speed;
        }
    }

    class People{
        public $bike;

        public function setBike(){
            $this->bike = new Bike();
        }

        public function upSpeedFromBike(){
            $this->bike->upSpeed();
        }

        public function downSpeedFromBike(){
            $this->bike->downSpeed();
        }

        public function getSpeedFromBike(){
            return $this->bike->speed;
        }
    }