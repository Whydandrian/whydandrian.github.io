<?php

/**
 * Tutorial resource :
 * ==== Rata-rata =====
 * 1. https://stackoverflow.com/questions/52390338/how-to-sum-array-using-function-in-php
 * 2. PHP Manual Official
 * 
 * ==== Nilai Tertinggi ====
 * 
 * ==== Nilai Terendah ====
 */


$fruit = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$exp = explode(" ", $fruit);

// $imp = implode($exp);
// echo $imp;
// echo "<br>" . count($exp);

// $i = 0;

// foreach ($exp as $val => $key) {
//     echo "$val => $key" . "<br>";
//     $i = $i + 1;
// }

// $Bagi = $i;

// for ($i = 0; $i <= $Bagi - 1; $i++) {
//     $bilangan[$i] = $fruit[$i];
//     $Jumlah_Total = $Jumlah_Total + $bilangan[$i];
// }

$rerata = array_sum($exp);
echo nl2br("Rata-rata menggunakan function PHP : " . $rerata);

function rata_rata($array)
{
    $total = 0;
    foreach ($array as $value) {
        $total += $value;
    }
    return $total;
}
$hasil = rata_rata($exp);
echo nl2br("\n$hasil");
