<?php
    session_start();
    if ( !isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style_admin.css?v6">
        
</head>
<body >
    <nav class="Navigator">
        <div class="Brand">
            <div id="Depan" onclick="ubahheader()">Sing</div>
            <div id="Belakang" onclick="ubahheader1()">It</div>
        </div>
        <ul >
            <li><a href="admin.php">Home</a></li>
            <li><a href="admin_tambah.php">Add Lagu</a></li>
            <li><a href="admin_edit.php">Edit Lagu</a></li>
            <li><a href="index.php">Logout</a></li>
            
            <li ><input class="btn" onclick="mode()" type="checkbox"></li>
        </ul>
        <div class="List-Nav-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </nav>
    <div class= "bungkus">
        <div class = "walcome">
            <h1 class = "head">DASHBOARD</h1>
            <h3 >Selamat Datang,</h3><br>
            <h2>Admin Sing<span> It<span></h2>
        </div>
        <div class="box">
            <a href="daftar_user.php">
                <div class="user-box">
                    <h2>Data User</h2>
                    <img src="img/user.png" alt="user-icon" width=100px>
                </div>
            </a>
            <a href="admin_data_lagu.php">
                <div class="lagu-box">
                    <h2>Data Lagu</h2>
                    <img src="img/musical-note.png" alt="song-icon" width=100px>
                </div>
            </a>
        </div>
    </div>

    <footer>
        <p>Copyright. Yanuar Gideon Simalango</p>
    </footer>
    
    <script src="script/sctipt.js">
    </script>
    
</body>

</html>