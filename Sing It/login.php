<?php
    session_start();
    require('koneksi.php');

    if(isset($_POST['login'])){
        $sql = mysqli_query($conn_log,"SELECT * FROM `login` WHERE `username` = '$_POST[username]' AND `password` = '$_POST[password]'");
        if (mysqli_num_rows($sql) == 0 ){
            echo '<script language = "javascript">
            alert("Login Gagal"); document.location = "login.php";</script>' ;

        }elseif(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_array($sql)){
                if($row['username'] === "Admin" && $row['password'] === "Admin123"){
                    $_SESSION['login'] = true;
                    header("Location: admin.php") ;
                }
                else{
                    $_SESSION['login'] = true;
                    $_SESSION['id_user'] = $row['id_user'];
                    $_SESSION['nama'] = $row['nama'];
                    header("Location: home.php") ;
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style_login.css?v9">
        
</head>
<body >
    <div class = "container">
        <div class = "login">
            <div class ="bungkus">
                <form action=""method="POST" class="daftar-user">
                <p class="daftar-text" style="font-size: 2rem; font-weight: 800;">Login</p>
                    <div class="input-group">
                        <input type="text" name="username"  placeholder="Username" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-group">
                        <button type="submit" name="login" class="btn"><b>Login</b></button>
                    </div>
                    <p class="login-register-text">Tidak Mempunyai Akun? <a href="register.php">Registrasi disini</a>.</p>
                </form>
            </div>
        </div>
        </div>
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>