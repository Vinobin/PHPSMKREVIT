<h3>KERANJANG BELANJA</h3>
<?php
    if(isset($_GET['hapus'])){
        $id=$_GET['hapus'];
        unset($_SESSION['_'.$id]);
    }
    if(!isset($_SESSION['pelanggan'])){
        header("location:?f=home&m=login");
    } else{

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        isi($id);
        header("location:?f=home&m=beli")
    }else{
        keranjang();
    }
    }
    function isi(){
        if(isset($_SESSION['_'.$id])){
            $_SESSION['_'.$id]++;
        }else{
            $_SESSION['_'.$id]=1;
        }
    }
    function keranjang(){
        global $db;
        echo '

        <table class="table table-bordered w-60">
        
            <tr>
                 <th>menu</th>
                <th>harga</th>
                <th>jumlah</th>
                <th>total</th>
                <th>hapus</th>
            </tr>
       
        ';
        foreach($_SESSION as $key => $value){
            if ($key<>'pelanggan' && $key<table>'idpelanggan'){
                $id=substr($key,1);
                $sql="SELECT * FROM tblmenu WHERE id=$id";
                $row=$db->getALL($sql);
                foreach($row as $r){
                    echo '<tr>'
                    echo '<td>'.$r['menu'].'</td>';
                    echo '<td>'.$r['harga'].'</td>';
                    echo '<td>'.$value.'</td>';
                    echo '<td>'.$r['harga'] * $value.'</td>';
                    echo '<td><a href="?f=home&m=beli&hapus=.$r['idmenu'].'">hapus</a></td>';
                    echo '</tr>';
                }
               
            }
           
        }
        echo '</table>';
    }
?>