<?php

// Nilail (celcius * 9/5) +32
//Parameter function int celcius
// invoke function celciusToFahrenheit(12); // print 53,6


function celciusToFahrenheit($celcius)
{
    $convertion=($celcius*9/5)+32;

    echo "$celcius celcius = $convertion fahrenheit";
}

celciusToFahrenheit(32)
?>