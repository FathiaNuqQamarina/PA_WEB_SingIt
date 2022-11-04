<?php
    require('koneksi.php');
?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $hasil = mysqli_query($conn_log, "SELECT * FROM playlist WHERE id = '".$id."' ");
        $row = mysqli_fetch_array($hasil);
    }

    date_default_timezone_set("Asia/Makassar");
    if(isset($_POST['submit'])){
        $artis = $_POST['artis'];
        $judul = $_POST['judul'];
        $tanggal= date('Y:m:d');
        

    
        $sql_upload = mysqli_query($conn_log,"UPDATE `playlist` SET `Penyanyi`='".$artis."',`Lagu`= '".$judul."',`Tanggal`='".$tanggal."' WHERE `id` = '".$id."'");
        if($sql_upload){
            echo '<script language = "javascript">
            alert("Data Berhasil Di Input") ;document.location = "admin_lihat.php";</script>';    
        }
        else{
            echo '<script language = "javascript">
            alert("Data Gagal Di Input");document.location = "admin_lihat.php"; </script>' ;    
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
    <link rel="stylesheet" href="stylesheet/style_admin.css?v4">
        
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
        <div class="containerplay">
            <h2>Edit Data Playlist</h2>
            <div class="play">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class = "form">
                        <label for="">Artis</label>
                        <input type="text" name="artis" value = "<?php echo $row['Penyanyi'] ?>" ><br>
                        <label for="">Judul</label>
                        <input type="text" name="judul" value = "<?php echo $row['Lagu'] ?>" >
                    </div>
                    <div class = "form">
                    <button type="submit" name="submit"><b>Submit</b></button>
                    </div>
                    
                    
                    
                </form>
            </div>
        </div>
    </div>
    <p>Copyright. Yanuar Gideon Simalango</p>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>