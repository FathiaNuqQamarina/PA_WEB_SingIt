<?php
    session_start();
    require('koneksi.php');

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = mysqli_query($conn_log,"SELECT * FROM login WHERE username = '$username' OR password = '$password'");
        $hitung = mysqli_num_rows($sql);
        $pw = mysqli_fetch_array($sql);
        $passwordsekarang = $pw['password'];

        if ($hitung > 0 ){
            //verifikasi password
            if($pw['username'] === "Admin" && $pw['password'] === "Admin123"){
                $_SESSION['login'] = true;
                echo '<script language = "javascript">
                alert("Anda Login Sebagai Admin"); document.location = "admin.php";</script>' ;
                
            }elseif(password_verify($password, $passwordsekarang) ){
                $_SESSION['login'] = true;
                $_SESSION['id_user'] = $pw['id_user'];
                $_SESSION['nama'] = $pw['nama'];
                echo '<script language = "javascript">
                alert("Anda berhasil login"); document.location = "home.php";</script>' ;
            // }
            }else{
                echo '<script language = "javascript">
                alert("Password salah"); document.location = "login.php";</script>' ;

            }
        }else{
            echo '<script language = "javascript">
            alert("Login Gagal"); document.location = "login.php";</script>' ;

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
    <link rel="stylesheet" href="stylesheet/style_login.css?v2">
        
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