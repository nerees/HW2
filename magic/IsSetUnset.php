<?php
class IsSetUnset{
private $str;
public function __set($name,$value){
$this->str[$name] = $value;
}
public function __get($name){
echo "Overloaded Property name = " . $this->str[$name] . "<br/>";
}
public function __isset($name){
if(isset($this->str[$name])){
echo "Property \$$name is set." . PHP_EOL;
} else {
echo "Property \$$name is not set." . PHP_EOL;
}
}
public function __unset($name){
unset($this->str[$name]);
echo "\$$name is unset" .PHP_EOL;
}
}
