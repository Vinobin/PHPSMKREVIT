<h1>menu</h1>

<div class="mt-4 mb-4">
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $where ="WHERE id=$id";
    $id="&id=".$id;
    echo $where;
}else{
    $where="";
    $id="";
}
?>
 
</div>
<?php
$jumlahdata=$db->rowCOUNT("SELECT id FROM barang $where");
$banyak=3;
$halaman=$ceil($jumlahdata/$banyak);
  $sql="SELECT * FROM barang $where ORDER BY id ASC LIMIT $mulai,$banyak";
  $row=$db->getALL($sql);
  $no=1+$mulai;
  
?>

        <?php if(!empty($row)){?>
        <?php foreach($row as $r): ?>

            <div class="card" style="width: 18rem; float:left; margin:10px;">
  <img style="height:150px;" src="/upload/<?php echo $r['gambar']?>"class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $r['menu']?></h5>
    <p class="card-text"><?php echo $r['harga']?></p>
    <a href="#" class="btn btn-primary" href ="?f=kategori&m=insert" role="button">beli disini</a>
  </div>
</div>
       
        <?php endforeach ?>
        <?php }?>
    <div style="clear:both;">
<?php
for ($i=1; $i <=$halaman ; $i++) { 
    echo '<a href="?f=home&m=produk&p='.$i.$id.'">'.$i.'</a>';
    echo '&nbsp &nbsp &nbsp';
}
?>
</div>