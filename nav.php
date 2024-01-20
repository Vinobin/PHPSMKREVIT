<nav>
    <ul>
        <li><a href="?menu=kontak">kontak</a></li>
        <li><a href="?menu=akun">akun</a></li>
</nav>
<?php
    if(isset($_GET['menu'])){
        $menu=$_GET['menu'];
       require_once $menu. '.php';
    }
?>