<?php
class animal 
{
  public $name;
  public $legs;
  public $cold_blooded;
  function __construct($name,$legs,$cold_blooded)
  {
    $this -> name=$name;
    $this -> legs=$legs;
    $this -> cold_blooded=$cold_blooded;
  }
}

?>