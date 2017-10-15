<?php
class CallCallStatic
{
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' "
             . implode(', ', $arguments). PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' "
             . implode(', ', $arguments). PHP_EOL;
    }
}


