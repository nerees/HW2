<?php
class sleepwakeup{
  
	    
    public function __construct()
    {
        
    }
    
    private function zadinam()
    {
        echo 'pabudome ir kelkimės' . PHP_EOL;
    }
	private function migdom()
    {
        echo 'saldziu sapnu' . PHP_EOL;
    }
    
    public function __sleep()
    {
        $this->migdom(); 
    }
    
    public function __wakeup()
    {
        $this->zadinam();
    }
}
