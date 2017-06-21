
<?php
/**
 * Created by PhpStorm.
 * User: vinamilk26
 * Date: 13/06/2017
 * Time: 08:07
 */
    require_once "connect_db/db_connection.php";
    if(isset($_POST['login'])){
        $user=$_POST['user'];
        $password=$_POST['password'];
        $query="select * from members WHERE Username= '$user' and password='$password'";
        $result=mysqli_query($link, $query);
        $rows=mysqli_num_rows($result);
        if($rows > 0){
            if(isset($_POST['remember'])){
                setcookie('username', $user, time()+60*60);
                setcookie('password', $password, time()+60*60);
            }
            session_start();
            $_SESSION['user']=$user;
            $_SESSION['password']=$password;
            header("location: admin.php");
        }else{
            $err="Tên đăng nhập hoặc mật khẩu không tồn tại!";
        }
    }else{
        header("localtion: admin/login.php");
    }
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS-->
    <link rel="stylesheet" type = "text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type = "text/css" href="admin.css">
    <!--Favicon-->
    <link rel="icon" href="../home/pic/favicon.ico" type="image/x-icon"/>

    <title>Strict Login</title>
</head>
<body>
<div class="container-body">
    <div class="container-logo collapse navbar-collapse">
        <img src="../home/pic/logo.png" alt="logo">
    </div>
    <div class=" container container-content">
        <h1 class="text-center">Đăng nhập</h1>
        <p class="text-danger text-center"> <?php if(isset($err)) echo $err;?></p>
        <div class="row">
            <div class="col-sm-6 col-md-offset-4 col-md-4 col-lg-4">
                <form method="post" class="login-form">
                    <div class="form-group input-text">
                        Tên đăng nhập: <input class="form-control" type="text" name="user" placeholder="User" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'];?>">
                    </div>
                    <div class="form-group">
                        Password: <input class="form-control" type="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>">
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <div class="submit">
                            <button class="btn btn-primary" type="submit" name="login">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
