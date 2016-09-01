<?php
    class MyCountable {
        public static $globalCounter = 0;
        private $counter;

		public function __construct(){
			self::$globalCounter += 1;
			$this->counter = self::$globalCounter;		
		}
		
	    public function __get($name) {
            if ( property_exists($this, $name) ) {
                return $this->$name;
            }
            throw new Exception("Attribute error: attribute $name not found");
        }
        
		public function __toString() {
			return sprintf("Countable number: %d", $this->counter);
		}
	}
	$c1 = new MyCountable();
	$c2 = new MyCountable();
	$c3 = new MyCountable();
	$c4 = new MyCountable();
	$c5 = new MyCountable();
	echo $c1 . PHP_EOL;
	echo $c2 . PHP_EOL;
	echo $c3 . PHP_EOL;
	echo $c4 . PHP_EOL;
	echo $c5 . PHP_EOL;

?>