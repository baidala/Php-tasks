<?php
   class  Vector {
        
         private $x;
         private $y;
               
         private function validate($value) {
            if ( is_numeric($value) ) {
                return $value;
            }
            throw new Exception("Invalid param");
         }

        public function __construct($x=0.0, $y=0.0) {
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
                
        public function  len() {
            return  hypot($this->x, $this->y);
        }
        
        public function  sum( Vector $other) {
            $this->x = $this->x + $other->x;
	        $this->y = $this->y + $other->y;
        }
        
        public function  diff( Vector $other ) {
            $this->x = $this->x - $other->x;
	        $this->y = $this->y - $other->y; 
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

    function  isTheSameInstance(&$refX, &$refY) {
         if ( $refX === $refY ) {
            echo $refX .  " and " . $refY .  " is references to the same instance" . PHP_EOL;
        }  else {
            echo $refX .  " and " . $refY .  " is different instances" . PHP_EOL;
        }
    }

    $a =  new  Vector( 2,  5);
    $b =  new  Vector( 3,  7);
    $c =  new  Vector( 3,  7);
    $d = $a;  // "type">Reference copy
    $e = clone $a;  // "type">Instance copy

    echo  "a: " . $a . PHP_EOL;
    echo  "b: " . $b . PHP_EOL;
    echo  "c: " . $c . PHP_EOL;

     isEquals($a, $b);
     isEquals($b, $c);

     isTheSameInstance($a, $b);
     isTheSameInstance($a, $d);

    echo $a->len() . PHP_EOL;
    echo $b->len() . PHP_EOL;
    
    $a->sum($c);
    $b->diff($c);
    
    echo  "a: " .$a . PHP_EOL;
    echo  "b: " .$b . PHP_EOL;
?>
