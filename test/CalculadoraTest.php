<?php
use PHPUnit\Framework\TestCase;
include './src/Calculadora.php';

final class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora(2,5);
        $this->assertEquals(7, $calc->suma());
    }

    public function testResta()
    {
        $calc = new Calculadora(8,4);
        $this->assertEquals(4, $calc->suma());
    }

    public function testMultiplicacion()
    {
        $calc = new Calculadora(3,5);
        $this->assertEquals(15, $calc->suma());
    }
}
?>