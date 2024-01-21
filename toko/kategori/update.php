<?php
require_once "../function.php";
$sql="SELECT * FROM barang WHERE id=$id";
$result=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_assoc($result);


// $kategori='es jus';
// $id=22;

// echo $sql;
?>
<form action=""method="post">
    kategori :
    <input type="text" name="kategori" value="<?php echo $row['kategori']?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
if(isset($_POST'simpan'])){
    $kategori=$_POST['kategori'];
    $sql="UPDATE barang SET barang='$kategori' WHERE id=$id";
$result=mysqli_query($koneksi,$sql);
header("ocalhost/PHPSMKREVIT/PHPSMKREVIT/toko/kategori/select.php");
}