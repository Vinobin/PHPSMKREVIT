<?php
session_start();
require_once "../dbcontroller.php";
$db=new DB;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto">

            </div>
            <div class="form-group">
                <form action="" method="post">
                    <div>
                        <h3>LOGIN TOKO</h3>
                    </div>
                    <div class="form-group">
                        <label for="">GMAIL</label>
                        <input type="email" name="email" require class="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="email" name="password" require class="password" class="form-control">>

                    </div>
                    <div>
                        <input type="submit" name="simpan" value="login" class="btn btn-primary>
                    </div>
                </form>
            </div>
        </div>
</div>
    </div>
</body>
</html>
<?php
if(isset($_POST['login']){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM barang WHERE email='$email' AND '$password' ";
    $count=$db->rowCOUNT($sql);
    if($count== 0){
        echo "<h3>EMAIL ATAU PASSWORD SALAH</h3>";
    }else {
        $sql="SELECT * FROM barang WHERE email='$email' AND '$password'";
        $row=$db->getITEM($sql);
        $_SESSION['user']=$row['email'];
        $_SESSION['level']=$row['level'];
        header("location:index.php");
    }
    
})
?>