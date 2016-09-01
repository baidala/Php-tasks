<?php
     
   class Mohican {
       public static $last = NULL;
       private $prev;
       private $next;
       private $id;
		
       public function __construct($id) {
			$this->id = $id;
			if ( self::$last == NULL ) {
				self::$last = $this;
				$this->prev = NULL;
				$this->next = NULL;
			} else {
				$this->prev = self::$last;
				self::$last->next = $this;
				self::$last = $this;
			}	
		}
		public function __destruct () { 
			echo "deleted ". $this->getId() . PHP_EOL;
			if ( $this->prev == NULL) {
				} else if ( $this === self::$last ) {
					self::$last->prev->next = NULL;
					self::$last = $this->prev;
				} else {
					$this->prev->next = $this->next;
					$this->next->prev = $this->prev;
				}
		}
		public static function getLast() {
			return self::$last;
		}
	
		
		public function __get($name) {
            if ( property_exists($this, $name) ) {
                return $this->$name;
            }
            throw new Exception("Attribute error: attribute $name not found");
        }
	
		public function __toString() {
			return sprintf("Mohican number: %d", $this->id);
		}
	}
	
	$first = new Mohican(1);
	$second = new Mohican(2);
	$third = new Mohican(3);
	echo $first . PHP_EOL;
	echo $second . PHP_EOL;
	echo $third . PHP_EOL;
	
	echo "Last: " . $first->getLast() . PHP_EOL;

	unset($third);
	echo "Last: " . $first->getLast() . PHP_EOL; 

?>
