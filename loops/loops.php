<?php

//Task 1
$x = 1; 
while($x <= 10)
{
    echo "$x <br>";
    $x++;
} 

// task separator
echo "<hr style=\"margin 1rem 0\">";

//Task2 

//Use the PHP function range(start, end, step)  to create array of numbers 5 to 100.
$number_list = range(5,100);
print_r ($number_list);

//Use for-loop and if-statement to print all odd numbers.
for ($i = 5; $i < 100; $i++)
{
    if ($i % 2 == 1) // ==1 is for odd number
    {
    echo $i;
    echo "";
    }
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

// Declare and assign the indexed array with your favourite food (at least 4 array elements). Name the array food.)

$food = array('french beans' , 'pasta' , 'mojitos' , 'cake');

//Use while-loop to print array elements (every food in a new row).
$arrLength = sizeof($food);
$indexPointer = 0; 
 
while ($indexPointer < $arrLength)
{
   echo $food[$indexPointer] ."<br>";

   $indexPointer += 1;
}

//Use for-loop to print array elements (every food in a new row).
for ($i = 0; $i < sizeof($food); $i += 1)
{
   echo $food[$i]."<br>";
}

//Use foreach-loop to print array elements (every food in a new row).
foreach($food as $value)
{
  print $value. "<br>" ;
}

// task separator
echo "<hr style=\"margin 1rem 0\">";


//Task 4

//Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.Before looping, you need to print the opening list-tag <ul> After looping, you need to print the closing list-tag </ul>


for ($i = 0; $i < sizeof($food); $i += 1)
{
    echo "<ul>";
   echo "<li> " . $food[$i]. "</li>" . "<br>";
     echo "</ul>";
}

//Task5

//The array from task 3 is turned into associative array. 


$food_assoc = [
  "beans"=>[
    "type"=>"fruit",
    "origin"=>"africa"
  ],
  "pasta"=>[
    "type"=>"main",
    "origin"=>"italian"
  ],
  "mojitos"=>[
    "type"=>"drink",
    "origin"=>"mexico"
  ],
  "cake"=>[
    "type"=>"desert",
    "origin"=>"london"
  ]
];

print_r($food_assoc);
echo "<ul>";
foreach ($food_assoc as $key => $value) {
  echo "<li>$key</li><ul>";
  foreach ($food_assoc[$key] as $key => $value) {
    echo "<li>$value</li>";
  }
  echo "</ul>";
}
echo "</ul>"
    

?>