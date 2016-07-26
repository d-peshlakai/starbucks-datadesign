<?php
/**
 * accessor method for Starbucks inputCustomerId
 *@return  int value of Starbucks inputCustomerId
 **/
 private function getinputCustomerId () {
  return($this->inputCustomerId);
}

/**
 * mutator method for Starbucks input Customer Id
 *
 * @param int $newCustomerId new value of customer profile id
 * @throws \RangeException if $newCustomerId is negative
 * @throws \IdError if $newCustomerId is not an integer
 **///
 	private function setNewCustomerId (int
	$newCustomerId) {
	// verify that the customer id is positive
		if ($newCustomerId !==0) {
			throw(new\OutOfRangeExceptionException ("customer name is not found"));
		}
	//store the new customer id
	$this->customerId = $newCustomerId;
}

?>
