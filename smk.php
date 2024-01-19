<?php
$nama=array("tojo", "budi", "siti", 100,);
var_dump($nama);
echo "<br>";
echo "<br>";
foreach ($nama as $key){
    echo $key.'<br>';
}
$nama=array(
    "budi"=>"malang",
    "tojo"=>"jakarta",
    "siti"=>"sidoarjo"
);
var_dump($nama);
foreach ($nama as $key =>$value){
    echo $key.'-'.$value;
    echo '<br>';
}
?>