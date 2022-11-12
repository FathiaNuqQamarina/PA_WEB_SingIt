<?php
    require('koneksi.php');
    session_start();
    if ( !isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
    }
?>

<?php
    $sesi = $_SESSION['id_user'];
    $sql_profile = mysqli_query($conn_log,"SELECT * FROM login WHERE id_user = '$sesi'") or die(mysqli_error($conn_log));
    $data = mysqli_fetch_array($sql_profile);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style_admin.css?v4">
        
</head>
<body >
<nav class="Navigator">
        <div class="Brand">
            <div id="Depan" onclick="ubahheader()">Sing</div>
            <div id="Belakang" onclick="ubahheader1()">It</div>
        </div>
        <ul >
            <li><a href="profile.php">Profile</a></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="user_lihat_playlist.php">Playlist</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="artis.php">Artist</a></li>
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
        <div class="containerplay">
            <h2>Edit Profile</h2>
            <div class="play">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class = "form">
                        <label for="">Nama</label>
                        <input type="text" name="nama" value = "<?php echo $data['nama'] ?>" required /><br>
                        <label for="">Username</label>
                        <input type="text" name="username" value = "<?php echo $data['username'] ?>" required /><br>
                        <label for="">Ubah Gambar</label>
                        <input type="file" name="foto" require>

                    </div>
                    <div class = "form">
                    <button type="submit" name="edit"><b>Edit</b></button><br>
                    <button type="reset" name="batal"><b>Batal</b></button>
                    </div>
                    
                    
                    
                </form>
                <?php
                    if(isset($_POST['edit'])){
                        $nama = $_POST['nama'];
                        $username = $_POST['username']; 

                        $gambar = $_FILES['foto']['name'];
                        $x = explode('.', $gambar);
                        $ekstensi = strtolower(end($x));

                        $gambar_baru = "$sesi.$ekstensi";
                        $tmp = $_FILES['foto']['tmp_name'];

                        $sql_edit_profile=mysqli_query($conn_log,"UPDATE login SET nama ='$nama',username='$username' WHERE id_user = '$sesi'") or die(mysqli_error($conn_log));
                        if($sql_edit_profile){
                            echo '<script language = "javascript">
                            alert("Data Berhasil Di Edit") ;document.location = "profile.php";</script>';    
                        }
                        else{
                            echo '<script language = "javascript">
                            alert("Data Gagal Di Edit");document.location = "profile.php"; </script>' ;    
                        }

                        // jika ganti gambar
                        if(move_uploaded_file($tmp, './profile/' . $gambar_baru)){
            
                        $sql_edit_profile=mysqli_query($conn_log,"UPDATE login SET nama ='$nama',username='$username',gambar='$gambar_baru' WHERE id_user = '$sesi'") or die(mysqli_error($conn_log));
                        if($sql_edit_profile){
                            echo '<script language = "javascript">
                            alert("Data Berhasil Di Edit") ;document.location = "profile.php";</script>';    
                        }
                        else{
                            echo '<script language = "javascript">
                            alert("Data Gagal Di Edit");document.location = "profile.php"; </script>' ;    
                        }
                        }


                    }
                ?>
            </div>
        </div>
    </div>
    <footer>
        <p>Copyright. Yanuar Gideon Simalango</p>
    </footer>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>