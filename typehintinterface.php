<?php
// Your code here!
const BR = "<br />";
interface Car {
    //protected $model;
    //protected $height;
    
    public function calcTankVolume();
}

class Bmw implements Car {
 
  protected $rib;
  protected $model;
  protected $height;
  
  public function __construct($model, $rib, $height)
  {
    $this -> model = $model;
    $this -> rib = $rib;
    $this -> height = $height;
  }
   
  // Calculates a rectangular tank volume
  public function calcTankVolume()
  {
    return $this -> rib * $this -> rib * $this -> height;
  } 
}

class Mercedes implements Car {
  protected $radius;
   
  public function __construct($model, $radius, $height)
  {
    $this ->model = $model;
    $this -> radius = $radius;
    $this -> height = $height;
  }
 
  
  // Calculates the volume of cylinders
  public function calcTankVolume()
  {
    return $this -> radius * $this -> radius * pi() * $this -> height;
  }
}

function calcTankPrice(Car $car, $pricePerGalon)
{
  echo $car -> calcTankVolume() * 0.0043290 * $pricePerGalon . "$";
}

$bmw1 = new Bmw('62182791', 14, 21); 
echo calcTankPrice($bmw1, 3).BR;
 
$mercedes1 = new Mercedes('12189796', 7, 28); 
echo calcTankPrice($mercedes1, 3);


?>
