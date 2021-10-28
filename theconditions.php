<?php

$age = 30;

if ($age < 18){
    echo "Sorry, we cannot allow you to view this content";
}else{
    echo "enjoy the rest of the evening";
}

echo "<hr>";
$mark = 68;
if ($mark < 60){
    echo "fail";
}else{
    echo "pass";
}

echo "<hr>";
$registeredUsername = "allan";
$registeredPassword = "allan123";
$username = "allan";
$password = "allan123kkei";
    if ($username == $registeredUsername and $password==$registeredPassword){
        echo "Login Successful";
    }else{
        echo "Login Failed";}

    echo "<hr>";
    $score = 86;
    if ($score < 40){
        echo "E";
    } elseif ($score<50){
        echo "D";
    }elseif ($score<60){
        echo "C";
    }elseif ($score<70){
        echo "B";
    }else{
        echo "A";
    }

    echo "<hr>";
    $bettingNumber = 3;
    switch ($bettingNumber){
        case 1:
            echo "Oooops!!! You lost";
            break;
        case 2:
            echo "Opheges you are in lost";
            break;
        case 3:
            echo "Congratulations!! You won!!";
            break;
        case 4:
            echo "Oooops!!! You lost";
            break;
        default:
            echo "enter a number from 1 - 4 to bet";
    }
    echo "<hr>";

