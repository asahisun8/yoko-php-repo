<?php
// INTERNAL / BULT-IN FUCTIONS - functions created by PHP
$str1 = "hello world";
$str2 = "JOHN DOE";
echo strtoupper($str1); //transforms the text to uppercases
echo "<br>";
echo strtolower($str2); //transforms the text to lowercases

//USER_DEFINED FUNCTIONS

function nameOffunction(){
    echo "Hello World! <br>";
}

function helloMsg(){
    echo "<p>Say your name.</p>";    
}

function add(){
    $sum = 5 + 6;
    echo $sum . "<br>";
}

//call function-->is_executable

nameOffunction();
nameOffunction();

helloMsg();
helloMsg();
helloMsg();

add();
add();
add();
add();

//function using arguments 

function firstName($fname){
    echo "$fname Smith is my name.<br>";
}

function givenName($firstname, $year){
    echo "<p>The given name is $firstname. Born in $year</p>";    
}

//call function

$first_name = "John";
$a = "Maria";

firstName("yoko");
firstName("joe");
firstName($first_name);
firstName($a);

givenName("Adam", 1978);
givenName("Glenn", 1990);

$b = "Naruto";
$c = 1967;

$firstname = "Jade";
$year = 1985;

givenName($firstname, $year);   
// argument


 
echo "Git Test";
?>