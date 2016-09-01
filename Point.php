<?php
   class  Point {
        
         private $x;
         private $y;
               
         private function validate($value) {
            if ( is_numeric($value) ) {
                return $value;
            }
            throw new Exception("Invalid param");
         }

        public function __construct($x=0, $y=0) {
            $this->x = $this->validate($x);
            $this->y = $this->validate($y);
        }
               
        public function __get($name) {
            if ( property_exists($this, $name) ) {
                return $this->$name;
            }
            throw Exception("Attribute error: attribute $name not found");
        }

        public function __set($name, $value) {
            if ( property_exists($this, $name) ) {
                $this->$name = $this->validate($value);
            }
            throw Exception("Attribute error: attribute $name not found");
        }
                
        public function  distance(Point $other) {
             return  hypot($this->x - $other->x, $this->y - $other->y);
        }

        public function  __toString() {
             return  sprintf( "(%s, %s)", $this->x, $this->y);
        }
    }

     
    function  isEquals($x, $y) {
         if ( $x == $y ) {
            echo $x .  " is equal to " . $y . PHP_EOL;
        }  else {
            echo $x .  " is not equal to " . $y . PHP_EOL;
        }
    }

    function  isTheSameInstance(Point &$refX, Point &$refY) {
         if ( $refX === $refY ) {
            echo $refX .  " and " . $refY .  " is references to the same instance" . PHP_EOL;
        }  else {
            echo $refX .  " and " . $refY .  " is different instances" . PHP_EOL;
        }
    }

?>
