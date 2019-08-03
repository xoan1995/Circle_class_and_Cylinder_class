<?php
$cylinder1 = new cylinder( 3 , 4);
echo $cylinder1->toString().'<br/>';
echo 'cylinder1 area: ' . $cylinder1->calculateArea() . '<br />';
echo 'cylinder1 perimeter: ' . $cylinder1->calculatePerimeter() . '<br />';

$cylinder2 = new cylinder( 2 , 5);
echo $cylinder2->toString().'<br/>';
echo 'cylinder2 area: ' . $cylinder2->calculateArea() . '<br />';
echo 'cylinder2 perimeter: ' . $cylinder2->calculatePerimeter() . '<br />';