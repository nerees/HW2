<?php
class SetGet{
	private $a;
    private $b;

    public function __get($that) {
            if (property_exists($this, $that)) {
                return $this->$that;
            }
    }

    public function __set($that, $what) {
        if (property_exists($this, $that)) {
            $this->$that = $what;
        }
    }
}
