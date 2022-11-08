<?php
    require('koneksi.php');
?>

<?php
    date_default_timezone_set("Asia/Makassar");
    if(isset($_POST['submit'])){
        $artis = $_POST['artis'];
        $judul = $_POST['judul'];
        $tanggal= date('d/m/Y H:i:s');
        
        $gambar = $_FILES['foto']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$judul.$ekstensi";
        $tmp = $_FILES['foto']['tmp_name'];

        $lagu = $_FILES['lagu']['name'];
        $x = explode('.', $lagu);
        $ekstensi = strtolower(end($x));

        $lagu_baru = "$judul.$ekstensi";
        $tmplagu = $_FILES['lagu']['tmp_name'];
        
        
        if(move_uploaded_file($tmp, './file/' . $gambar_baru) & move_uploaded_file($tmplagu, './file/' . $lagu_baru)){
            
            $sql_upload = mysqli_query($conn_log,"INSERT INTO `topindo`(`Penyanyi`, `Lagu`, `File`,`Gambar`,`Tanggal`) VALUES ('".$artis."','".$judul."','".$lagu_baru."','".$gambar_baru."','".$tanggal."')");
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
    <link rel="stylesheet" href="stylesheet/style_admin.css?v7">
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
        <div class="containerplay">
            <h2>Add Data Top Indonesia</h2>
            <div class="play">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class = "form">
                        <label for="">Artis</label>
                        <input type="text" name="artis" required>   
                        <label for="">Judul</label>
                        <input type="text" name="judul" required>
                        <label for="">File Lagu</label>
                        <input type="file" name="lagu" required>
                        <label for="">Gambar</label>
                        <input type="file" name="foto" require>
                    </div>
                    <div class = "form">
                    <button type="submit" name="submit"><b>Submit</b></button>
                    </div>
                    
                    
                    
                </form>
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