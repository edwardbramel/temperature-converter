<?php
// function to calculate converted temperatures
function convertTemp($temp, $unit1, $unit2)
{
    // conversion formulas
    // Celsius to Fahrenheit = T(°C) × 9/5 + 32
    // Celsius to Kelvin = T(°C) + 273.15
    // Fahrenheit to Celsius = (T(°F) - 32) × 5/9
    // Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9
    // Kelvin to Fahrenheit = T(K) × 9/5 - 459.67
    // Kelvin to Celsius = T(K) - 273.15

    // You need to develop the logic to convert the temperature based on the selections and input made
    $convertedTemp = 0;
    $unit1 == 0;
    $unit2 == 0;

    if ($unit1 == 'celsius' && $unit2 == 'fahrenheit') {
        $convertedTemp = $temp * 9 / 5 + 32;
    } else if ($unit1 == 'celsius' && $unit2 == 'kelvin') {
        $convertedTemp = $temp + 273.15;
    } else if ($unit1 == 'fahrenheit' && $unit2 == 'celsius') {
        $convertedTemp = ($temp - 32) * 5 / 9;
    } else if ($unit1 == 'fahrenheit' && $unit2 == 'kelvin') {
        $convertedTemp = ($temp + 459.67) * 5 / 9;
    } else if ($unit1 == 'kelvin' && $unit2 == 'fahrenheit') {
        $convertedTemp = $temp * 9 / 5 - 459.67;
    } else if ($unit1 == 'kelvin' && $unit2 == 'celsius') {
        $convertedTemp = $temp - 273.15;
    } else if ($unit1 == "celsius" && $unit2 == 'celsius') {
        echo "please recheck inputs";
    } else if ($unit1 == 'fahrenheit' && $unit2 == 'fahrenheit') {
        $convertedTemp = $temp;
    } else if ($unit1 == 'kelvin' && $unit2 == 'kelvin') {
        echo "please recheck inputs";
    } else if ($unit1 == '--Select--' && $unit2 == '--Select--') {
        echo "please recheck inputs";
    } else if ($unit1 == '--Select--' && $unit2 == 'celsius') {
        echo "please recheck inputs";
    } else if ($unit1 == '--Select--' && $unit2 == 'fahrenheit') {
        echo "please recheck inputs";
    } else if ($unit1 == '--Select--' && $unit2 == 'kelvin') {
        echo "please recheck inputs";
    } else if ($unit1 == 'celsius' && $unit2 == '--Select--') {
        echo "please recheck inputs";
    } else if ($unit1 == 'fahrenheit' && $unit2 == '--Select--') {
        echo "please recheck inputs";
    } else if ($unit1 == 'kelvin' && $unit2 == '--Select--') {
        echo "please recheck inputs";
    }
    return $convertedTemp;
} // end functios

// Logic to check for POST and grab data from $_POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store the original temp and units in variables
    // You can then use these variables to help you make the form sticky
    // then call the convertTemp() function
    // Once you have the converted temperature you can place PHP within the converttemp field using PHP

    // I coded the sticky code for the originaltemp field for you

    $originalTemperature = $_POST['originaltemp'];
    $originalUnit = $_POST['originalunit'];
    $conversionUnit = $_POST['conversionunit'];
    $convertedTemp = convertTemp($originalTemperature, $originalUnit, $conversionUnit);
} else {
    $originalUnit = null;
    $originalTemperature = null;
    $conversionUnit = null;
    $convertedTemp = null;
}

// echo "originalTemperature = " . $originalTemperature . "<br>";
// echo "originalUnit = " . $originalUnit . "<br>" ;
// echho "conversionUnit = " . $conversionUnit . "<br>";
// echo "convertedTemp = " . $convertedTemp . "<br>"