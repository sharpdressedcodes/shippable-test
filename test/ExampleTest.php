<?php

use \PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {

	public function testIndex() {

		$a = 1;
		$b = 2;

		$this->assertEquals(3, $a + $b, 'Expected this to equal 3');

	}

}
