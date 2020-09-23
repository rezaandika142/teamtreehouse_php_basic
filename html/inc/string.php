<?php

// buat function askName
// parameternya $nama
// askName("Ahmad Dhani"); // Namamu adalah Ahmad Dhani

function askName($nama)
{
    $format_name=ucwords(strtolower($nama));
    echo ("Namamu adalah $format_name");
}

askName ("Ahmad Dhani PRASETYO");

