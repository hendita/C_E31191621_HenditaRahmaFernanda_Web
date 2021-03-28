<?php
// The parent class
Class Car {
    //The $model property is now protected , so it can be accessed
    //from within the class and its child classes
    protected $model;

    //public setter method
    public function setModel($model)
    {
        $this -> model = $model;
    }

}
//The child class
class SportCar extends Car {
    //Has no problem to get a protected property that belongs to this parent
    public function hello()
    {

    return "beep! I am a <i>" . $this -> model . "</i><br />";
    }
}
//Create an instance from the child class
$sportsCar1 = new SportsCar();