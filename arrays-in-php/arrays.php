<?php

//Task 1
//Declare and assign the indexed array with your favourite food 
$food = ['beans' , 'pasta' , 'mojitos' , 'cake'];
//Print every array element in a new line.
echo $food[0]. "<br>". $food[1]. "<br>". $food[2]. "<br>". $food[3]. "<br>";// task separator 

//- keep doing
echo "<hr style=\"margin 1rem 0\">";

//Task 2
//Print the array elements from the previous exercise in unordered list.
echo '<ul>';
echo '<li>' . implode( '</li><li>', $food) . '</li>';
echo '</ul>';
// task separator
echo "<hr style=\"margin 1rem 0\">";

//Task 3
//Turn the indexed array food from task 1 into associative array named food_assoc. 
//$food_assoc = array('starters' , 'main course' , 'bevrage' , 'desert');
//$combined = array_combine($food, $food_assoc);
//echo '<pre>'; print_r($combined); echo '</pre>';

// task separator
echo "<hr style=\"margin 1rem 0\">";

//$food = array(
//"french beans" => "starters",
//'main course' => "pasta"  
//
//);

$food = array(
"beans" => "starters",
"pasta" => "course",
"mojitos" => "drink",
"cake" => "desert"
    

);

foreach ($food as $food_assoc => $food)
{
    echo $food.  " | " . $food_assoc. "<br>";
}

//Task 4
//$origin = array('france', 'italy', 'spain', 'japan');
//$combined = array_combine($food, $food_assoc, $origin);
//echo '<pre>'; print_r($combined); echo '</pre>';

$food_assoc = array(
    "beans" =>[
        "type" => "starters",
        "origin" => "france"
    ],
    
        "pasta" => [
                    "type" => "main",
                    "origin" => "italian"
        ],
        
        "mojitos" => [
                       "type" => "drink",
                       "origin" => "mexico"
        ],
            
        
        "cake" => [ 
                    "type" => "desert",
                    "origin" => "london"
        ]        
    
    );


echo key($food_assoc) ." | ". $food_assoc['beans']['type'] ." | ". 
    $food_assoc['beans']["origin"]."<br>";
next($food_assoc);

echo key($food_assoc) ." | ". $food_assoc['pasta']['type'] ." | ". 
    $food_assoc['pasta']["origin"] . "<br>";
next($food_assoc);

echo key($food_assoc) ." | ". $food_assoc["mojitos"]['type'] ." | ". $food_assoc["mojitos"]["origin"] . "<br>";
next($food_assoc);

echo key($food_assoc) ." | ". $food_assoc['cake']['type'] ." | ". $food_assoc["cake"]["origin"] . "\n";

// task separator
echo "<hr style=\"margin 1rem 0\">";

//task5
