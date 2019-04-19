<?php

require_once __DIR__ . './../components/Math.php';

use \components\Math;
use \PHPUnit\Framework\TestCase;

class MathTest extends TestCase {

	public function testAdd() {

		$a = 1;
		$b = 2;

		$this->assertEquals(3, Math::add($a, $b), 'Expected this to equal 3');

	}

	public function testSubtract() {

		$a = 5;
		$b = 2;

		$this->assertEquals(3, Math::subtract($a, $b), 'Expected this to equal 3');

	}

}
