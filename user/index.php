<?php
session_start();
  require_once "dbcontroller.php";
  $db=new DB;
  $sql="SELECT * FROM tblkategori ORDER BY kategori";
  $row=$db->getALL($sql);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOKO KU | aplikasi toko smk</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
       <div class="row">
        <h2>TOKO KU</h2>
        <div class="col-md-3">
            <h3>toko</h3>
        </div>
        <div class="col-md-9">
             <div class="float-right mt-4">logout</div>
             <div class="float-right mt-4 mr-4">pelanggan</div>
             <div class="float-right mt-4 mr-4">daftar</div>
             <div class="float-right mt-4 mr-4">logout</div>

        </div>
       </div>
       <div class="row mt-5">
        <div class="col-md-3">
            <h3>kategori</h3>
            <hr>
            <?php if(!empty($row)){ ?>
            <ul class="nav flex-column">
                
                <?php foreach($row as $r) : ?>
                <li class="nav-item"><a class="nav-link" href="#"><?php echo $r['kategori']?></a></li>
                <?php endforeach ?>
            </ul>
            <?php }  ?>
        </div>
        <div class="col-md-9">
            <?php
if (isset($_GET['f']) && isset($_GET['m'])){
    $f=$_GET['f'];
    $m=$_GET['m'];
    $file=$f.'/'.$m.'php';
    require_once $file;
}else{
    require_once "home/produk.php";
}
            ?>
        </div>
        <div class="col-md-9">
            <?php
            echo "<h1>DAFTAR BARANG</h1>"
            ?>
        </div>
       </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="text-center">2024 - copyright@bintangrahmad.com</p>
        </div>
    </div>
</body>
</html>