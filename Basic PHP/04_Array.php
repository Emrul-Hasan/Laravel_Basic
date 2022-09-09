<?php
 $fruits = array("Mango","Banana","Lichi","Guava");
 $fruitsLength = count($fruits);

for ($index = 0; $index<$fruitsLength; $index++)
 echo "$index => $fruits[$index] <br>";

 echo "<br>";

 $motorCycle =array(
    "Honda" => "125cc",
    "Yamaha" => "100cc",
    "Apache" => "200cc"
 );
 foreach ($motorCycle as $key => $value){
    print "Comapny $key  Power  $value <br>";
 }

 echo "<br>";

 $companyProfiles = array(
    array("Honda", "35b", '100K'),
    array("Yamaha", "32b", '99K'), 
    array("Bajaj", "18b", '85K')
);

for ($row=0; $row < count($companyProfiles) ; $row++) { 
   echo "<p>Row # $row</p>";
   echo "<ul>";

   for ($col=0; $col <3 ; $col++) { 
        echo "<li>".$companyProfiles[$row][$col]."</li>";
   }
   echo "</ul>";
}

$name = array('Afifa','Asif','Tazremin','Emon','Hasan');
sort($name);
for($index = 0; $index<count($name); $index++){
 echo "$index => $name[$index] <br>";
};

echo '<br>';

$marketShare = array("Honda" => "35b", "Yamaha" => "32b", "Bajaj" =>"18b", "Sujuki" => "28b", "Kawasaki" => "25b");
 //asort($marketShare);
// arsort($marketShare);
 ksort($marketShare);
//krsort($marketShare);

foreach ($marketShare as $key => $value) {
    echo "Company: $key " . " Market share: $value $ <br>";
}



// most used array functions
$companies = array("Honda", "Bajaj", "Yamaha", "Bajaj", "Sujuki", "Kawasaki");
$marketShare = array("Honda" => "35b", "Yamaha" => "32b", "Bajaj" =>"18b", "Sujuki" => "28b", "Kawasaki" => "25b");

/* is_array() -> return 1 or True */
 echo is_array($companies);
 echo "<br>";

/* in_array() -> return 1 or True */
 $result = in_array('Honda', $companies);
 echo "$result <br>";
 

 

// array_merge -> return a new array (use print_r)
$merged = array_merge($companies, $marketShare);
// print_r($merged);

// array_keys -> extract all keys
// print_r(array_keys($merged));

// array_key_exists -> 1 or True
// print_r(array_key_exists('Honda', $merged));


// array_push -> add a new value to existing array
// array_push($companies, "BMW");
// print_r($companies);


// array_pop -> remove last value
// array_pop($companies);
// array_pop($companies);
// array_pop($companies);
// array_pop($companies);
// print_r($companies);


// array_values -> return all values
// print_r(array_values($merged));


// array_map -> loop through each elements of an array and perform an single action to all - returns another array
function salesTax($price) {
	return number_format ( ($price * 1.05), 2, '.', '' );
}

$items = array (
		100,
        22,
		50,
		250,
		70,
		500 
);
$finalCost = array_map ( 'salesTax', $items );
print_r ( $finalCost );

// array_unique
print_r(array_unique($companies));


// array_slice - returns a new array after removing indexed value
// $companies = array("Honda", "Yamaha", "Bajaj", "Sujuki", "Kawasaki");
// print_r($companies);
// print_r(array_slice($companies, 1, 5));




?>

