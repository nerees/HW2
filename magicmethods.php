<?php
require_once 'magic/CallCallStatic.php';
require_once 'magic/ConstructToString.php';
require_once 'magic/debuginfo.php';
require_once 'magic/destructmagic.php';
require_once 'magic/invoke.php';
require_once 'magic/IsSetUnset.php';
require_once 'magic/MagicClone.php';
require_once 'magic/SetGet.php';
require_once 'magic/setstate.php';
require_once 'magic/sleepwakeup.php';

echo 'METODAI: __construct() ir __toString()'.PHP_EOL;
echo '------------------------' . PHP_EOL;
$pv = new ConstructToString ( 'a', 'b', 'c' );
var_dump($pv);PHP_EOL;
echo $pv . PHP_EOL;
echo $pv->a . PHP_EOL;
echo $pv->b . PHP_EOL;
echo $pv->c . PHP_EOL;
echo '----------' . PHP_EOL;



echo 'METODAI __set() ir __get()'.PHP_EOL;
echo '------------------------' . PHP_EOL;
$pvz = new SetGet();
$pvz->a = "tai a";
$pvz->b = "tai b";
echo $pvz->a . PHP_EOL;
echo $pvz->b . PHP_EOL;
echo '----------' . PHP_EOL;



echo 'METODAI: __call() ir __callStatic()'.PHP_EOL;
echo '------------------------' . PHP_EOL;
$obj = new CallCallStatic;
$obj->testas('in object context');
CallCallStatic::testas('in static context');
echo '----------' . PHP_EOL;



echo 'METODAS: __debugInfo()'.PHP_EOL;
echo '------------------------' . PHP_EOL;
var_dump(new debuginfo(42));
PHP_EOL;
echo '----------' . PHP_EOL;


echo 'METODAS: __destruct()'.PHP_EOL;
echo '------------------------' . PHP_EOL;
$taikinys = new destructmagic();
var_dump($taikinys);
PHP_EOL;
echo '----------' . PHP_EOL;


echo 'METODAS: __invoke()'.PHP_EOL;
echo '------------------------' . PHP_EOL;
$obj = new invoke;
$obj(7);
var_dump(is_callable($obj));
PHP_EOL;
echo '----------' . PHP_EOL;


echo 'METODAS: __isset() ir __unset()'.PHP_EOL;
echo '------------------------' . PHP_EOL;
$objToys = new IsSetUnset;
$objToys->overloaded_property = "new";
echo $objToys->overloaded_property . PHP_EOL;
isset($objToys->overloaded_property);
unset($objToys->overloaded_property);
isset($objToys->overloaded_property);
PHP_EOL;
echo '----------' . PHP_EOL;


echo 'METODAS: __clone()'.PHP_EOL;
echo '------------------------' . PHP_EOL;
$obj = new MyCloneable();
$obj->object1 = new MagicClone();
$obj->object2 = new MagicClone();
$obj2 = clone $obj;
echo "Originalus objektas:" . PHP_EOL;
print_r($obj);
echo "Klonuotas objektas:" .PHP_EOL;
print_r($obj2);
echo '----------' . PHP_EOL;


echo 'METODAS: __set_state()'.PHP_EOL;
echo '------------------------' . PHP_EOL;
$a = new setstate;
$a->var1 = 5;
$a->var2 = 'foo';
eval('$b = ' . var_export($a, true) . ';');
var_dump($b);
echo '----------' . PHP_EOL;


echo 'METODAS: __sleep() ir __wakeup()'.PHP_EOL;
echo '------------------------' . PHP_EOL;
$pvzd = new sleepwakeup();
$pvzd->__sleep();
$pvzd->__wakeup();
var_dump($pvzd);
PHP_EOL;
echo '----------' . PHP_EOL;