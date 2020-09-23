<?php

$tanya=readline("Pilih mana (yes/no) ? ");

if($tanya=="yes")   // Jika memilih yes
{
    echo "Kamu memilih Yes, ";
}elseif($tanya=="no")   // Jika memilib no
{
    echo "Kamu memilih No, ";
}
elseif($tanya=="maybe")  // Jika memilih maybe
{
    echo ("Kamu memilih maybe");
}
else{ // Jika tidak memilih yes/no/maybe ( tidak dalam pilihan yang terssedia )
    echo "Kamu tidak memilih pilihan yang tersedia !!!";
}

echo PHP_EOL;


$menu=readline("Pilih angka 1-3 ? ");
// Pilih input yang diuji
switch($menu)
{
    case 1:                 // Jika user menginput angka 1
        echo "Anda memilih angka 1";
    break;
    case 2:                 // Jika user menginput angka 2
        echo "Anda memilih angka 2";
    break;
    case 3:                 // Jika user menginput angka 3
        echo "Anda memilih angka 3";
    break;
    default:                // Jika user tidak menginput angka yang tersedia
        echo "Anda tidak memilih pilihan yang tersedia";
}