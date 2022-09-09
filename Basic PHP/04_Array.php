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

?>

