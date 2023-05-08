<?php
// /tests/unit/CalculatorTest.php
require_once "Calc.php";

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd() {
        // Instantiate the class to be tested
        $calculator = new Calc;

        // Fetch the method to be tested
        $result = $calculator->add(20,5);

        // Assert the assumed result with the actual result
        $this->assertEquals(25, $result);
    }

    public function testSubtract() {
        // Instantiate the class to be tested
        $calculator = new Calc;
    
        // Fetch the method to be tested
        $result = $calculator->subtract(20,5);
    
        // Assert the assumed result with the actual result
        $this->assertEquals(15, $result);
    }
    
    public function testMultiply() {
        // Instantiate the class to be tested
        $calculator = new Calc;
    
        // Fetch the method to be tested
        $result = $calculator->multiply(20,5);
    
        // Assert the assumed result with the actual result
        $this->assertEquals(100, $result);
    }
    
    public function testDivide() {
        // Instantiate the class to be tested
        $calculator = new Calc;
    
        // Fetch the method to be tested
        $result = $calculator->divide(20,5);
    
        // Assert the assumed result with the actual result
        $this->assertEquals(4, $result);
    }
}
?>