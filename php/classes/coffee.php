<?php
/**
 * accessor method for Starbucks getCustomerId
 *@return  int value of Starbucks getCustomerId
 **/
 private function getCoffeeId () {
  return($this->coffeeId);
}

/**
 * mutator method for Starbucks input Customer Id
 *
 * @param int $ new value of customer profile id
 * @throws \RangeException if $newCustomerId is negative
 * @throws \IdError if $newCustomerId is not an integer
 **///
 	public function setNewCoffeeId (int
	$newCoffeeId) {
	// verify that the customer id is positive
		if ($newCoffeeId !==0) {
			throw(new\OutOfRangeException ("coffee name is not found"));
		}
	//store the new coffee id
	$this->coffeeId = $newCoffeeId;
}

/**
 *  constructor of the coffee Id
 * @param int|null $newCoffee id of correct coffee name or null if wrong name
 *@param int
 **///
	public function _construct (int $newCustomerId = null) {
	try {
		$this->setCustomerId($newCustomerId);
		$this->setCoffeeDescription($newCoffeeDescription);
		$this->setCoffeeItemType($newCoffeeType);
	}
	catch(\invalidArgumentException $invalidArgument) {
		throw(new \InvalidArgumentException($invaldiArgument->getCoffeeId))
	}
}
?>
