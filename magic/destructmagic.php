<?php
class destructmagic {
   function __construct() {
       echo "Gaminam taikinį" . PHP_EOL;
       $this->pav = "Taikinys";
	   $this->taiktel = ' Taikinio telefonas +37068679522 ';
   }

   function __destruct() {
       echo "Destruktinam " . $this->pav . $this->taiktel . PHP_EOL;
   }
}