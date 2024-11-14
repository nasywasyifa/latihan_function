<?php
$nama = "Dini";
$nilaiInt = 80;
$nilaiFloat = 4.6;

echo $nama;
echo "<br>";
echo $nilaiInt;
echo "<br>";
echo $nilaiFloat;
echo "<br>";

//aritmatika
$a = 4;
$b = 5;
$hasilKali = $a * $b;
echo "Hasil Kali antara " .$a ." * " .$b. "=" . $hasilKali;
echo "<br>";
$hasilBagi = $a / $b;
echo "Hasil Bagi antara " .$a ." / " .$b. "=" . $hasilBagi;

echo "<br>";
$hasilTambah = $a + $b;
echo "Hasil Tambah antara " .$a ." + " .$b. "=" . $hasilTambah;
echo "<br>";

//Array cara lama
$arr = array("Dini", "Toni", "Budi", 27);
var_dump($arr);
echo "<br>";
echo $arr[2];
echo "<br>";


$arr2 = [[
  "id" => 1, 
  "nama" => "Doni",
  "Kelas" => "web",
], [
  "id" => 2, 
  "nama" => "Ajeng",
  "Kelas" => "web",
], [
  "id" => 3, 
  "nama" => "Banu",
  "Kelas" => "web",
]];
var_dump($arr2);
echo "<br><br>";
var_dump($arr2[0]);
echo $arr2[0]["Kelas"];

$rows = mysqli_fetch_all($result);
foreach ($arr2 as $value) {
  echo "Nama " .$value["Nama"]. "<br>";
  echo "Kelas " .$value["Kelas"]. "<br>";
  echo "<br>";
}


foreach ($arr2 as $value) {
  echo "Nama " .$value['Nama']. "<br>";
  echo "Kelas " .$value['Kelas']. "<br>";
  echo "<br>";
  
}
echo "<br><br>";
$param = 0;
while ($param < count($arr2)) {
  echo "Nama " .$arr2[$param]['Nama']. "<br>";
  echo "Kelas " .$arr2[$param]['Kelas']. "<br>";
  echo "<br>";
  $param++;
  
}
echo "<br><br>";
function penjumlahan($nilaiX, $nilaiY)
{
  return $nilaiX + $nilaiY;
}
function pengurangan($nilaiX, $nilaiY)
{
  return $nilaiX - $nilaiY;
}

$x = 6;
$y = 7;
echo penjumlahan($x, $y);
echo "<br><br>";
echo pengurangan($y, $x);
?>