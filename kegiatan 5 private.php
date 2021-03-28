<?php
// The parent class 
class Car {
    //The $model property is private, this it can be accessed
    //Only from inside the class
    private $model;
    //Public setter method
    public function setModel ($model)
    {
        $this -> model = $model;
    }

}
// The chlid class
class SportsCar extends Car{
    //Tries to get a private property that belonge to the parent
    public function hello()
    {
        return "beep! I am a <i>" . $this -> model . "</i><br />";
    }
}
//Create an instance from the child class
$sportsCar1 = new SportCar();
//Set the class model name
$sportCar1 -> setModel ('Mercedes Benz');

