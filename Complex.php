<?php
   class Complex {
        
         private $real;
         private $imaginary;
               
         private function validate($value) {
            if ( is_numeric($value) ) {
                return $value;
            }
            throw new Exception("Invalid param");
         }

        public function __construct($real=0.0, $imaginary=0.0) {
            $this->real = $this->validate($real);
            $this->imaginary = $this->validate($imaginary);
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
                
        public function  sum( Complex $other) {
            $this->real = $this->real + $other->real;
	        $this->imaginary = $this->imaginary + $other->imaginary;
        }
        
        public function  diff( Complex $other ) {
            $this->real = $this->real - $other->real;
	        $this->imaginary = $this->imaginary - $other->imaginary; 
        }
        
        public function  multiply( Complex $other ) {
            $tempReal = $this->real * $other->real - $this->imaginary * $other->imaginary;;
	        $tempImaginary = $this->imaginary * $other->real + $this->real * $other->imaginary;
	        
	        $this->real = $tempReal;
	        $this->imaginary = $tempImaginary;
        }

        public function  __toString() {
            if ( $this->imaginary < 0 ) {
    	        return  sprintf( "%s%s", $this->real, $this->imaginary);
            } else {
    	        return  sprintf( "%s+%s", $this->real, $this->imaginary);
            }
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

    $a =  new  Complex( 2,  5);
    $b =  new  Complex( 3,  -7);
    $c =  new  Complex( -3,  7);
    $d = $a;  // "type">Reference copy
    $e = clone $a;  // "type">Instance copy

    echo  "a: " . $a . PHP_EOL;
    echo  "b: " . $b . PHP_EOL;
    echo  "c: " . $c . PHP_EOL;

     isEquals($a, $b);
     isEquals($b, $c);

     isTheSameInstance($a, $b);
     isTheSameInstance($a, $d);

    $a->sum($c);
    $b->diff($c);
    $c->multiply($a);
    
    echo  "a: " .$a . PHP_EOL;
    echo  "b: " .$b . PHP_EOL;
    echo  "c: " .$c . PHP_EOL;
?>
