<?php
    class Bike {
        private $speed = 0; //物件級別的屬性
        const var1 = 123;

        static $counter = 0; //類別級別的屬性

        public function __construct($initSpeed = 0){
            $this->speed = $initSpeed;
            self::$counter++;
        }

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

class TWId {
    private $id;
    private static $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
    public function __construct($id='', $gender=true, $area=-1){
        if (strlen($id) != 0){
            $this->id = $id;
        }else {
            $area = $area==-1?rand(0,25):$area;
            $this->createNewId($gender, $area);
        }
    }
    private function createNewId($gender, $area){
        $id = substr(self::$letters, $area, 1);
        $id .= $gender?'1':'2';
        for ($i=0; $i<7; $i++){
            $id .= rand(0,9);
        }
        echo '<hr>';
        for ($i=0; $i<10; $i++){
            if (self::checkTWId($id . $i)){
                $this->id = $id . $i;
                break;
            }
        }
    }
    public static function checkTWId($twid){
        $ret = false;
        if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid)){
            $c1 = substr($twid, 0, 1);  // 'A'
            $n12 = strpos(self::$letters, $c1) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            $n3 = substr($twid, 1,1);
            $n4 = substr($twid, 2,1);
            $n5 = substr($twid, 3,1);
            $n6 = substr($twid, 4,1);
            $n7 = substr($twid, 5,1);
            $n8 = substr($twid, 6,1);
            $n9 = substr($twid, 7,1);
            $n10 = substr($twid, 8,1);
            $n11 = substr($twid, 9,1);
            $sum = $n1*1 + $n2*9 + $n3*8 + $n4*7 + $n5*6 +
                $n6*5 + $n7*4 + $n8*3 + $n9*2 + $n10*1 + $n11*1;
            $ret = ($sum % 10 == 0);
        }
        return $ret;
    }
    public function getGender(){
        return true;
    }
    public function getArea(){
        return '台中市';
    }
    public function getId(){
        return $this->id;
    }
}