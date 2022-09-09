<?php

$age = 10;
if ($age >= 12)
echo "Happy BirthDay";
else
echo "Second Condition";

$color = 'white';
if ($color=='red')
print"Color is red";




//switch
$color = "yellow";

switch ($color){
    case "blue":
        echo "This color is blue";
        break;
    case "yellow":
        echo "This color is yellow";
        break;
    case "green":
        echo "This color is green";
        break;
    default:
        print "Not specific color found!";     
}

// While Loop
$number = 0;
while($number <=20){
    print"The Number is :$number <br>";
    $number++;
}
// do while loop

$number1 = 0;
do{
    print "The new number is : $number1 <br>";
    $number1++;
}
while($number1 <=5);


// for loop

for($number2 = 0;$number2 <=10;$number2++){
    print "For Loop: $number2  <br>";
}

// for each loop
$fruits = ['apple','banana','mango'];
foreach($fruits as $value){
    print "$value <br>";
}
$person = array(
    "Emrul" => 10,
    "Hasan" => 17,
    "Emon" => 22,

);
foreach ($person as $key => $age){
print "Name : $key Age : $age <br>";
}

?>