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

}
