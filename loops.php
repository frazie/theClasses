<?php
//loop sections
//while loop
//do while loop
//for loop
//for each loop

//while loop
$number = 1;
while($number <= 10){
    echo $number;
    $number++;
    echo "<br>";
}
            //do while loop
echo "<hr>";
$numberTwo=10;
do{
    echo $numberTwo;
    $numberTwo++;
    echo "<br>";
    }while($numberTwo<=15);
echo "<hr>";
//for loop
for($numberThree=20;$numberThree<=25;$numberThree++){
    echo $numberThree;
    echo "<br>";
}
echo "<hr><h3>FOR EACH LOOP</h3>";
$names=array("King","Cliff","Allan","Mike","Odhiambo","Leonel");
foreach ($names as $jina){
    echo $jina;
    echo "<br>";
}
echo "<h3>even numbers assign.</h3>";
//write a program to print all even numbers from 0 to qoo in devending order using the following loops
//1. while loop
//2. do while loop
//3. for loop

echo "<h3>For loop</h3>";
for($test1=100;$test1>=0;$test1--){
    if ($test1%2==0){
        echo $test1;
    }
    echo "<br>";
}
echo "<h3>while loop</h3>";
echo "<hr>";
$numero = 100;
while($numero >= 0) {
    if ($numero % 2 == 0) {
        echo $numero;
    }
        $numero--;
        echo "<br>";
}
echo "<hr>";
echo "<h4>do while loop</h4>";
$nak=100;

do{ if ($nak%2==0){
    echo $nak;}
    $nak--;
    echo "<br>";
}while($nak>=0);
