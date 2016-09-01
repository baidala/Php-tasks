<?php
     
   class Gun {
        
         private $amount;
         private $capacity;
         private $fuelConsumption;
         private $isReady = false;
         private $model;
         private $totalShots; 
               
         private function validate($value) {
            if ( is_numeric($value) ) {
                return $value;
            }
            throw new Exception("Invalid param");
         }

        public function __construct( $model="Beretta", $capacity = 8 ) {
            $this->model = $model;
	        $this->capacity = $capacity;
	        $this->amount = 0;
	        $this->totalShots = 0;
	        $this->isReady = false; 
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
                
        public function ready() {
            return $this->isReady;
        } 
        
        public function prepare() {
            $this->isReady = !($this->ready());
        } 

        public function reload() {
            $this->amount = $this->capacity;
        } 

        public function shoot() {
            if ( !($this->ready()) ) {
		        throw Exception("Gun not ready");
	        }
	        if ( $this->amount < 1 ) {
		        $this->prepare();
		        throw Exception("Out Of Rounds");
            }
	
            $this->totalShots += 1;
            $this->amount -= 1; 
        } 
        
        public function  __toString() {
            $out = "Model: " .$this->model . PHP_EOL;
            $out .= "-- Capacity: " .$this->capacity . PHP_EOL;
            $out .= "-- Amount: " .$this->amount . PHP_EOL;
            $out .= "-- TotalShots: " .$this->totalShots . PHP_EOL;	
            $out .= "-- isReady: " . ($this->ready() ? 'ready' : 'not ready') . PHP_EOL; 

            return $out;
        }
    }

     


    $a = new Gun("Beretta", 8 );
    
   
    echo  $a . PHP_EOL;
    

    
?>
