<?php
   require_once('Point.php'); 
   
   class Car {
        
         private $fuelAmount;
         private $fuelCapacity;
         private $fuelConsumption;
         private $location;
         private $model; 
               
         private function validate($value) {
            if ( is_numeric($value) ) {
                return $value;
            }
            throw new Exception("Invalid param");
         }

        public function __construct($fuelCapacity=60, $fuelConsumption=0.6, $location = null, $model="Mercedes" ) {
            $this->fuelCapacity = $this->validate($fuelCapacity);
            $this->fuelConsumption = $this->validate($fuelConsumption);
            $this->model = $model;
            $this->fuelAmount = 0;
            $this->location  = is_null($location) ? new Point(0, 0) : $location;
        }
               
        public function __get($name) {
            if ( property_exists($this, $name) ) {
                return $this->$name;
            }
            throw new Exception("Attribute error: attribute $name not found");
        }

        public function __set($name, $value) {
            if ( property_exists($this, $name) ) {
                $this->$name = $this->validate($value);
            }
            throw new Exception("Attribute error: attribute $name not found");
        }
                
        public function drive( Point &$destination) {
            $distance = $this->location->distance($destination);
			$fuelNeeded = $distance * $this->fuelConsumption;
			
			if ( $fuelNeeded > $this->fuelAmount ) {
        		throw new Exception("OutOfFuel");
    		}
    		$this->fuelAmount -= $fuelNeeded;
    		$location = $destination;

        }
        
        public function driveXY($x, $y) {
			$destination = new Point($x, $y);
			$this->drive($destination);
		}
 
        
        public function refill($fuel) {
            $fuelRenewed = $this->fuelAmount + $fuel;

    		if ( $fuelRenewed > $this->fuelCapacity ) {
        		$this->fuelAmount = $fuelCapacity;
        		throw new Exception("ToMuchFuel");
    		}	 
    		$this->fuelAmount = $fuelRenewed;
        } 

        public function  __toString() {
            $out = $this->model . ": location: (" . $this->location->x ;
            $out .= ", " . $this->location->y . "), fuel: (";
            $out .= $this->fuelAmount . '/' . $this->fuelCapacity . ')';
            return $out;
        }
    }

     
    $p = new Point(1, 5);
    $a =  new  Car( 60, 0.6, $p, "Mers");
    
    echo "Point: " . $p . PHP_EOL;
    echo  $a . PHP_EOL;
    echo "Refill " . PHP_EOL;
    $a->refill(30);
    $p = new Point(3, 7);
    echo "Drive to Point: " . $p . PHP_EOL;
    $a->drive($p);
    echo  $a . PHP_EOL;

    
?>
