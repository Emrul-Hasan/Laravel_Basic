<?php
// function name() {
//   print "Hello world!";
// }

// name(); // call the function


// fUCTION WITH ARGUMENT
function fullname($firstName, $lastName){
    print $firstName.' '.$lastName;
}
fullname ("Emrul","Hasan");

// function with default argument


function printName($name){
 print "My name is $name";
}
printName("Emrul");


// Function with return value

function name ($firstName,$lastName){
    return $firstName.' '.$lastName;
}
print name('Tazremin','Oishi');

// Function with reference Argument

function addFiveCount($countValue){
    $countValue +=5;
    echo $countValue;
}

$countingNumber = 20;
addFiveCount($countingNumber);

// echo $countingNumber;

function calculator($method, int $var1, int $var2){
    if($method == 'sum')
    return $var1+$var2;
    elseif($method == 'sub')
    return $var1 - $var2;
    elseif($method == 'mul')
    return $var1*$var2;
    elseif($method == 'div')
    return $var1/$var2;
}

print calculator('mul', 5, 6);
?>


