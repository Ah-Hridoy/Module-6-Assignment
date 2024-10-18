<?php

$marks = 20;
$marks = 10;

function marks(){
    global $marks, $marks;
    echo $marks + $marks/2;
    echo "\n";
}
marks();


$marks = 60;

switch(true){
    case ($marks <= 100 && $marks >= 80):
    echo "Grade: A+";
    break;
    
    case ($marks <= 80 && $marks >= 70):
    echo "Grade: A";
    break;

    case ($marks <= 70 && $marks >= 60):
    echo "Grade: A-";
    break;

    case ($marks <= 60 && $marks >= 50):
    echo "Grade: B";
    break;

    case ($marks <= 50 && $marks >= 40):
    echo "Grade: C";
    break;

    case ($marks <= 40 && $marks >= 33):
    echo "Grade: D";
    break;

}