<?php
    require('koneksi.php');
?>

<?php
    if(isset($_POST['login'])){
        $sql = mysqli_query($conn_log,"SELECT * FROM `login` WHERE `username` = '$_POST[username]' AND `password` = '$_POST[password]'");
        if (mysqli_num_rows($sql) == 0 ){
            echo '<script language = "javascript">
            alert("Login Gagal"); document.location = "index.php";</script>' ;

        }elseif(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_array($sql)){
                if($row['username'] === "Admin" && $row['password'] === "Admin123"){
                    echo '<script language = "javascript">
                    alert("Login Sebagai Admin"); document.location = "admin.php";</script>' ;
                }
                else{
                    echo '<script language = "javascript">
                    alert("Login Berhasil"); document.location = "home.php";</script>' ;
                }
            }
        }
    }
?>
<?php
    if(isset($_POST['daftar'])){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_com = $_POST['password_com'];
        if ($password === $password_com){
            $sql = mysqli_query($conn_log,"INSERT INTO `login`(`nama`, `username`, `password`) VALUES ('".$nama."','".$username."','".$password."')");
            if ($sql == 0 ){
                echo '<script language = "javascript">
                alert("Daftar Gagal"); document.location = "index.php";</script>' ;
                
            }elseif($sql > 0){
                echo '<script language = "javascript">
                alert("Daftar Berhasil"); document.location = "index.php";</script>' ;
            }
        }else{
            echo '<script language = "javascript">
            alert("Password Tidak Sama"); document.location = "index.php";</script>' ;
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
        <div class = "daftar" >
            <div class ="bungkus">
                <form action=""method="POST" class="daftar-user">
                <p class="daftar-text" style="font-size: 2rem; font-weight: 800;">Register</p>    
                    <div class="input-group">
                        <input type="text" name="nama" placeholder="Nama" required>
                    </div>
                    <div class="input-group">
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password_com" placeholder="Confirmasi Password" required>
                    </div>
                    <button type="submit" name="daftar" class="btn" ><b>Daftar</b></button>
                </form>
            </div>
        </div>
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
                    <div>
                        <button type="submit" name="login" class="btn"><b>Login</b></button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>