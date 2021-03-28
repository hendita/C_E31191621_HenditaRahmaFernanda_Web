<?php
//The parent class 
class Car {
    //private property inside the class
    private $model;

    //Public setter method
    public function setModel($model)
    {

        $this -> model - $model;
    }
    public function hello()
    return "beep! I am a <i>" . $this -> model . "<i/><br />";
}
}
// the child class inherits the code from the parent class 
class SportsCar extends Car {
    //No code in the child class
$sportsCar1 - new SportCar();

//Set the value of the class' property.
//For this aim, we use a method that we created in the parent
$sporstCar1 -> setModel('Mercedes Benz');

//Use another method that the child class inherited from the parent class
echo $sporstCar1 -> hello ();
?>


