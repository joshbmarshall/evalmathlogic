<?php

/**
 * Testing eval math
 *
 */
class EvalMathTest extends PHPUnit_Framework_TestCase {

	public function testAddition() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(4.0, $math->evaluate('2 + 2'));
	}

	public function testSubtraction() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(2.0, $math->evaluate('4 - 2'));
	}

	public function testMultiplication() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(4.0, $math->evaluate('2 * 2'));
	}

	public function testDivision() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(2.0, $math->evaluate('4 / 2'));
	}

	public function testAdditionFP() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(4.1, $math->evaluate('2 + 2.1'));
	}

	public function testSubtractionFP() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(2.5, $math->evaluate('4.5 - 2'));
	}

	public function testMultiplicationFP() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(4.5, $math->evaluate('2.25 * 2'));
	}

	public function testDivisionFP() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(4.5, $math->evaluate('9 / 2'));
	}

	public function testLogicEqualsTrue() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(1, $math->evaluate('1 = 1'));
	}

	public function testLogicEqualsFalse() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(0, $math->evaluate('1 = 2'));
	}

	public function testLogicNotEqualsTrue() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(0, $math->evaluate('1 ! 1'));
	}

	public function testLogicNotEqualsFalse() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(1, $math->evaluate('1 ! 0'));
		$this->assertSame(1, $math->evaluate('1 ! 2'));
	}

	public function testLogicGTTrue() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(1, $math->evaluate('1 > 0'));
	}

	public function testLogicGTFalse() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(0, $math->evaluate('1 > 2'));
	}

	public function testLogicGTETrue() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(1, $math->evaluate('1 >= 0'));
		$this->assertSame(1, $math->evaluate('1 >= 1'));
	}

	public function testLogicGTEFalse() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(0, $math->evaluate('1 >= 2'));
	}

	public function testLogicLTTrue() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(1, $math->evaluate('1 < 5'));
	}

	public function testLogicLTFalse() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(0, $math->evaluate('1 < 1'));
	}

	public function testLogicLTETrue() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(1, $math->evaluate('1 <= 2'));
		$this->assertSame(1, $math->evaluate('1 <= 1'));
	}

	public function testLogicLTEFalse() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(0, $math->evaluate('1 <= 0'));
	}

	public function testLogicEquationEquals() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(1, $math->evaluate('1 + 1 = 2'));
		$this->assertSame(0, $math->evaluate('1 + 1 = 1'));
	}

	public function testLogicEquationNotEquals() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(0, $math->evaluate('1 + 1 ! 2'));
		$this->assertSame(1, $math->evaluate('1 + 1 ! 1'));
	}

	public function testLogicEquationGT() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(0, $math->evaluate('1 + 1 > 2'));
		$this->assertSame(1, $math->evaluate('1 + 1 > 1'));
	}

	public function testLogicEquationGTE() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(0, $math->evaluate('1 + 1 >= 3'));
		$this->assertSame(1, $math->evaluate('1 + 1 >= 2'));
		$this->assertSame(1, $math->evaluate('1 + 1 >= 1'));
	}

	public function testLogicEquationLT() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(1, $math->evaluate('1 + 1 < 3'));
		$this->assertSame(0, $math->evaluate('1 + 1 < 2'));
	}

	public function testLogicEquationLTE() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(1, $math->evaluate('1 + 1 <= 3'));
		$this->assertSame(1, $math->evaluate('1 + 1 <= 2'));
		$this->assertSame(0, $math->evaluate('1 + 1 <= 1'));
	}

	public function testNot() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(0, $math->evaluate('not(1)'));
	}

	public function testFloor() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(3.0, $math->evaluate('floor(10/3)'));
		$this->assertSame(3.0, $math->evaluate('floor(3.9)'));
	}

	public function testRound() {
		$math = new \Cognito\EvalMath\EvalMath();
		$this->assertSame(3.0, $math->evaluate('floor(10/3)'));
		$this->assertSame(3.0, $math->evaluate('round(10/3)'));
		$this->assertSame(3.3, $math->evaluate('round(10/3, 1)'));
		$this->assertSame(3.33, $math->evaluate('round(10/3, 2)'));
		$this->assertSame(3.333, $math->evaluate('round(10/3, 3)'));
		$this->assertSame(3.3333, $math->evaluate('round(10/3, 4)'));
		$this->assertSame(2.0, $math->evaluate('round(10/6)'));
		$this->assertSame(1.7, $math->evaluate('round(10/6, 1)'));
		$this->assertSame(1.67, $math->evaluate('round(10/6, 2)'));
		$this->assertSame(1.667, $math->evaluate('round(10/6, 3)'));
		$this->assertSame(1.0, $math->evaluate('round(1.49)'));
		$this->assertSame(2.0, $math->evaluate('round(1.50)'));
		$this->assertSame(2.0, $math->evaluate('round(1.51)'));
	}

}
