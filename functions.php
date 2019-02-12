
<?php

//Task1
//Declare the function named greeting. When this function is called,it prints: "<p>Welcome to the well structured code.</p>";
function greeting()
{
   echo "<p>Welcome to the well structured code.</p>";
}

//Call the function.
greeting();

// task separator
echo "<hr style=\"margin 1rem 0\">";

//Declare the function named calculateArithmeticMean. This function has 3 parameters: a, b and c. calculateArithmeticMean prints the arithmetic mean of a, b and c.
function calculateArithmeticMean($a, $b, $c)
{
    
    return ($a + $b + $c)/3;
} 

//Call the function with the values for paremeters.
echo calculateArithmeticMean(3,3,6);


// task separator
echo "<hr style=\"margin 1rem 0\">";

//Task 3
//Declare the function named calculateTotalPrice. This function has 1 parameter: price. calculateTotalPrice returns the total price after the tax of 13%.
function calculateTotalPrice($price)
{
    return $price + $price * 0.13;
}


//Declare the variable total and assign it with the value that calculateTotalPrice outputs when it is called (with the value for price parameter).
$total = calculateTotalPrice(130);

//Print total.
echo $total;

// task separator
echo "<hr style=\"margin 1rem 0\">";

// Task 4
// Declare the global variable length and assign it with the value 12.Declare the global variable width and assign it with the value 6. Declare the function named calculateRectangleArea.  This function calculates and prints the area of rectangle based on the global variables length and width. Make these variables accessible inside the local scope, and do the calculation and printing
global $length;
global $width;

function calculateRectangleArea()
{
    global $length;
    global $width;
    $length =12;
    $width =6;
    return $area = $length * $width;
}

//Call the function.
echo calculateRectangleArea();

// task separator
echo "<hr style=\"margin 1rem 0\">";

//Task 5
//If the function for calculating the area of a triangle looks like this:
global $area;
function calculateTriangleArea($base, $height)
{
    global $area;
    $area =  ($base * $height) / 2;
}

//Choose the values for parameters and call the function.
calculateTriangleArea(10,10);

//Print $area
echo $area;
    
?>