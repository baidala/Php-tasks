<?php
     
   class Unit {
        private $damage;
        private $hitPoints;
        private $hitPointsLimit;
        private $name;
        
        public function Unit($name, $hp, $dmg) {
        	$this->name = $name; 
        	$this->hitPoints = $hp;
        	$this->hitPointsLimit = $hp;
        	$this->damage = $dmg;
        	
        }
       
       public function __get($name) {
            if ( property_exists($this, $name) ) {
                return $this->$name;
            }
            throw new Exception("Attribute error: attribute [ $name ] not found");
        }
       
		private function ensureIsAlive() {
    		if ( $this->hitPoints == 0 ) {
        		throw new Exception("Error: Unit Is Dead");
    		}
    	}
    	public function addHitPoints($hp) {
    		self::ensureIsAlive();     
    		$hitPointsNeeded = $this->hitPointsLimit - $this->hitPoints;

    		if ( $hitPointsNeeded <= $hp ) {
        		$this->hitPoints += $hp;
    		} else {
        		$this->hitPoints = $this->hitPointsLimit;
    		}
    	}
		public function takeDamage($dmg) {
    		self::ensureIsAlive();
    		if ( $dmg >= $this->hitPoints ) {
        		$this->hitPoints = 0;
    		} else {
        		$this->hitPoints -= $dmg;
    		}
		}
		public function attack(&$enemy) {
    		$enemy->ensureIsAlive();
    		$enemy->takeDamage($this->damage);
    		$enemy->counterAttack($this);
		}
		public function counterAttack(&$enemy) {
    		self::ensureIsAlive();
    		$enemy->takeDamage($this->damage / 2);
		}
		public function __toString() {
			return sprintf("Name: %s, Hitpoints: %d/%d, Damage: %d", $this->name, $this->hitPoints, $this->hitPointsLimit, $this->damage);
		}
    }
    
    
    $barbar = new Unit("Barbarian", 20, 20);
	$knight = new Unit("Knight", 21, 25);

	echo $barbar . PHP_EOL;
	echo $knight . PHP_EOL;
    echo "barbar->attack(knight)" . PHP_EOL;
	$barbar->attack($knight);

	echo $barbar . PHP_EOL;
	echo $knight . PHP_EOL;
	echo "barbar->attack(knight)" . PHP_EOL;
	$barbar->attack($knight);	

	echo $barbar . PHP_EOL;
	echo $knight . PHP_EOL;

    
?>
