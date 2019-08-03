<?php
class Circle{
    public $radius;
    public function toString(){
        echo "The radius of the circle is: $this->radius";
    }
    public function __construct($radius)
    {
        $this->radius=$radius;
    }
    public function calculateArea(){
        return pi()*pow($this->radius,2);
    }
    public function calculatePerimeter(){
        return pi()*$this->radius*2;
    }
}
