<?php

//fungsi untuk menghitung volume dan luas permukaan kubus

function kubus($s){
  $volume = pow($s,3);
  $luas_permukaan  = 6 * pow($s,2);
  // return ["volume" => $volume,
  // "luas_permukaan" => $luas_permukaan];
  echo "volume kubus = " . $volume . "<br>";
  echo "luas permukaan = " .$luas_permukaan. "<br>";
}

kubus(5);

//fungsi untuk menghitung volume dan luas permukaan balok
function balok($p, $l, $t){
  $volume = ($p * $l * $t);
  $luas_permukaan = 2 * (($p*$l) + ($p*$t) + ($l*$t));
  echo "volume balok = " . $volume . "<br>";
  echo "luas permukaan = " .$luas_permukaan. "<br>";
}
balok(2,3,4);

//fungsi untuk menghitung volume limas segi empat
function LimasSegiEmpat($s, $t){
$luas_alas = pow($s,2);
$volume = (1/3) * $luas_alas * $t;
echo "volume LimasSegiEmpat = " . $volume . "<br>";
}
LimasSegiEmpat(2,5);

//fungsi untuk menghitung volume tabung
function tabung($r, $t){
  $r = pow($r,2);
  $volume = M_PI * $r *$t;
  $luas_permukaan = 2 * M_PI * $r * ($r + $t);
  echo "volume tabung = " . $volume . "<br>";
  echo "luas permukaan tabung = " . $luas_permukaan . "<br>";
}

tabung(1,2);

// //fungsi untuk menghitung volume dan luas permukaan Bola
function Bola($r){
  $volume = (4/3) * M_PI * pow($r,3);
  $luas_permukaan = 4 * M_PI * pow($r,2);
  echo "volume bola = " . $volume . "<br>";
  echo "luas permukaan bola = " . $luas_permukaan . "<br>";
}
bola(2,3);
?>