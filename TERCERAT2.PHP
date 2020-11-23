<?php
class CALCULADORA {
private $_val1, $_val2;
public function __construct( $val1, $val2 ) {
$this->_val1 = $val1;
$this->_val2 = $val2;
}
public function SUMA() {
return $this->_val1 + $this->_val2;
}
public function RESTA() {
return $this->_val1 - $this->_val2;
}
public function MULTIPLICACION() {
return $this->_val1 * $this->_val2;
}
public function DIVIDIR() {
return $this->_val1 / $this->_val2;
}
}
$RESULT = new CALCULADORA(8, 2); 
echo $RESULT-> SUMA()."\n"; 
echo $RESULT-> MULTIPLICACION()."\n"; 
echo $RESULT-> RESTA()."\n"; 
echo $RESULT-> DIVIDIR()."\n"; 