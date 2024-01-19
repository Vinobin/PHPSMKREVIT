<?php
$nama=array("joni", "tojo", "budi", "siti", 100,2.5);
var_dump($nama);
echo "<br>";
echo $nama[5];
echo "<br>";
// for($i=0; $i< 6; $i++){
//      echo $nama[$i]."<br>";
// }
// foreach ($nama as $k){
//     echo $k.'<br>';
// }
$nama=array(
    "joni"=>"surabaya",
    "budi"=>"malang",
    "tojo"=>"jakarta",
    "siti"=>"sidoarjo"
);
$nama["joni"]="surabaya";
$nama["budi"]="malang";
$nama["tojo"]="jakarta";
$nama["siti"]="sidoarjo";
$nama["edi"]="semarang";
var_dump($nama);
echo"<br>";
echo $nama['budi'];
foreach ($nama as $key =>$value){
    echo $key."=>".$value;
    echo "<br>";
}
?>