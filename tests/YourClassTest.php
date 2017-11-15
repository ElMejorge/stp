<?php 

use AhorroLibre\STP\StpOriginal;


class YourClassTest extends PHPUnit_Framework_TestCase{
	
  /**
  * Just check if the YourClass has no syntax error
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function tests_sending_payment(){
	$stp = new StpOriginal();
	$stp->sendPayment();

	$this->assertTrue(true);
  }

  public function tests_it_fucking_works(){
      $stp = new StpOriginal();
      $this->assertTrue($stp->returnTrue());
  }
  
}