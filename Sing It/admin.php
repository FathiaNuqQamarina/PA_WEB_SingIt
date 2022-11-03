<?php
    require('koneksi.php');
?>

<?php
    date_default_timezone_set("Asia/Makassar");
    if(isset($_POST['submit'])){
        $artis = $_POST['artis'];
        $judul = $_POST['judul'];
        $link = $_POST['link'];
        $tanggal= date('Y:m:d');
        
        $gambar = $_FILES['foto']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$judul.$ekstensi";
        $tmp = $_FILES['foto']['tmp_name'];
        
        
        if(move_uploaded_file($tmp, './file-foto/' . $gambar_baru)){
            
            $sql_upload = mysqli_query($conn_log,"INSERT INTO `playlist`(`Penyanyi`, `Lagu`, `Link`,`Gambar`,`Tanggal`) VALUES ('".$artis."','".$judul."','".$link."','".$gambar_baru."','".$tanggal."')");
            if($sql_upload){
                echo '<script language = "javascript">
                alert("Data Berhasil Di Input") </script>';    
            }
            else{
                echo '<script language = "javascript">
                alert("Data Gagal Di Input") </script>' ;    
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
            <li><a href="admin_tambah.php">Add Playlist</a></li>
            <li><a href="admin_lihat.php">Edit Playlist</a></li>
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
        <h1 class = "head">DASHBOARD</h1>
        <h3 >Selamat Datang,</h3><br>
        <h2>Admin Sing<span> It<span></h2>
        <div class="box">
            <div class="user-box">
            <br>
            <h2>Data User</h2>
            <br>
            <img src="img/user.png" alt="user-icon" width=100px>
            <a href="daftar_user.php">Lihat Daftar User</a>
            </div>
            <br>
            <div class="lagu-box">
            <br>
            <h2>Data Lagu</h2>
            <br>
            <img src="img/musical-note.png" alt="song-icon" width=100px>
            <a href="admin_lihat.php">Lihat Daftar Lagu</a>
            </div>
        </div>
    </div>
    <p>Copyright. Yanuar Gideon Simalango</p>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>