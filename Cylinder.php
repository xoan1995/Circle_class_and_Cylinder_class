<?php
include_once ('Circle.php');
class Cylinder extends  Circle{

    public $height;
    public function toString(){
        parent::toString();
        echo ' and '.$this->height;
        //echo "The radius of the circle is: $this->radius and $this->height";
    }
    public function __construct($radius,$height)
    {
        parent::__construct($radius);
        $this->height=$height;
    }
    public function calculateArea()
    {
        return parent::calculateArea()*2+parent::calculatePerimeter()*$this->height; // TODO: Change the autogenerated stub
    }
    public function calculateVolume(){
        return parent::calculateArea()*$this->height;
    }
}
