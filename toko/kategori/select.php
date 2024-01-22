<?php
$jumlahdata=$db->rowCOUNT("SELECT id FROM barang");
$banyak=3;
$halaman=$ceil($jumlahdata/$banyak);
  $sql="SELECT * FROM barang ORDER BY id ASC LIMIT $mulai,$banyak";
  $row=$db->getALL($sql);
  $no=1+$mulai;
  
?>
<h1>kategori</h1>
<table class="table table-bordered w-50">
    <thead>
        <tr>
           
            <th>kategori</th>
            <th>delete</th>
            <th>update</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($row as $r): ?>
        <tr>
           
            <td><?php echo $r['barang']?></td>
            <td><?php echo $r['id']?></td>
            <td><?php echo $r['id']?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php
for ($i=1; $i <=$halaman ; $i++) { 
    echo '<a href="?f=kategori&m=select&p='.$i.'">'.$i.'</a>';
    echo '&nbsp &nbsp &nbsp';
}
?>
