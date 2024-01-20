<?php
require_once "../function.php";
$sql="SELECT *  FROM barang";
$result=mysqli_query($koneksi,$sql);
// var_dump($result);
$jumlah = mysqli_num_rows($result);
// echo '<br>';
// echo $jumlah;
echo '
<table border="3px">
<tr>
   <th>no</th>
   <th>kategori</th>
</tr>
';
if($jumlah>0){
    while($row=mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['barang'].'</td>';
        echo '</tr>';
    }
}
echo '</table>';
?>
