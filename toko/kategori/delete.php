<?php
require_once "../function.php";
$sql="DELETE FROM barang WHERE id =$id";
$result=mysqli_query($koneksi,$sql);
echo $sql;
header("http://localhost/PHPSMKREVIT/PHPSMKREVIT/toko/kategori/select.php");
?>