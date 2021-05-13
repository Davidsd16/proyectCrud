<?php

namespace Tests;

use App\FizzBuzz;
use  PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
//la class tiene que llamarse igual al nombre del archivo

	public function testReturnEqualNumber() 
	{
		//Given
		$fizzbuzz = new FizzBuzz();

		//When 
		$result = $fizzbuzz->execute(7);

		//Then
		$this->assertEquals(7, $result);

	}

	public function testReturnFizzWhenNumberIsMultipleOf3() 
	{
		//Given
		$fizzbuzz = new FizzBuzz();

		//When 
		$result = $fizzbuzz->execute(3);

		//Then
		$this->assertEquals("Fizz", $result);

	}

	public function testReturnBuzzWhenNumberIsMultipleOf5() 
	{
		//Given
		$fizzbuzz = new FizzBuzz();

		//When 
		$result = $fizzbuzz->execute(5);

		//Then
		$this->assertEquals("Buzz", $result);

	}

	public function testReturnFizzBuzzWhenNumberIsMultipleOf3and5()
	{
		//Given
		$fizzbuzz = new FizzBuzz();

		//When 
		$result = $fizzbuzz->execute(15);

		//Then
		$this->assertEquals("FizzBuzz", $result);

	}

}


