<?php
    require('koneksi.php');
?>

<?php
    if(isset($_GET['id_playlist'])){
        $id_playlist = $_GET['id_playlist'];
        $hasil_playlist = mysqli_query($conn_log, "SELECT * FROM playlist WHERE id_playlist = '".$id_playlist."' ");
        $row_playlist = mysqli_fetch_array($hasil_playlist);
        $row_barat = 0;
        $row_indo = 0;
        $row_korea = 0;
        $id_barat = 0;
        $id_indo = 0;
        $id_korea = 0;
    }
    elseif(isset($_GET['id_barat'])){
        $id_barat = $_GET['id_barat'];
        $hasil_barat = mysqli_query($conn_log, "SELECT * FROM topbarat WHERE id_barat = '".$id_barat."' ");
        $row_barat = mysqli_fetch_array($hasil_barat);
        $row_playlist = 0;
        $row_indo = 0;
        $row_korea = 0;
        $id_playlist = 0;
        $id_indo = 0;
        $id_korea = 0;
    }
    elseif(isset($_GET['id_indo'])){
        $id_indo = $_GET['id_indo'];
        $hasil_indo = mysqli_query($conn_log, "SELECT * FROM topindo WHERE id_indo = '".$id_indo."' ");
        $row_indo = mysqli_fetch_array($hasil_indo);
        $row_playlist = 0;
        $row_barat = 0;
        $row_korea = 0;
        $id_playlist = 0;
        $id_barat = 0;
        $id_korea = 0;
    }
    elseif(isset($_GET['id_korea'])){
        $id_korea = $_GET['id_korea'];
        $hasil_korea = mysqli_query($conn_log, "SELECT * FROM topkorea WHERE id_korea = '".$id_korea."' ");
        $row_korea = mysqli_fetch_array($hasil_korea);
        $row_playlist = 0;
        $row_barat = 0;
        $row_indo = 0;
    }

    date_default_timezone_set("Asia/Makassar");
    if(isset($_POST['submit'])){
        $artis = $_POST['artis'];
        $judul = $_POST['judul'];
        $tanggal= date('d/m/Y H:i:s');
        

    
        $sql_upload_playlist = mysqli_query($conn_log,"UPDATE `playlist` SET `Penyanyi`='".$artis."',`Lagu`= '".$judul."',`Tanggal`='".$tanggal."' WHERE `id_playlist` = '".$id_playlist."'");
        $sql_upload_barat= mysqli_query($conn_log,"UPDATE `topbarat` SET `Penyanyi`='".$artis."',`Lagu`= '".$judul."',`Tanggal`='".$tanggal."' WHERE `id_barat` = '".$id_barat."'");
        $sql_upload_indo = mysqli_query($conn_log,"UPDATE `topindo` SET `Penyanyi`='".$artis."',`Lagu`= '".$judul."',`Tanggal`='".$tanggal."' WHERE `id_indo` = '".$id_indo."'");
        $sql_upload_korea = mysqli_query($conn_log,"UPDATE `topkorea` SET `Penyanyi`='".$artis."',`Lagu`= '".$judul."',`Tanggal`='".$tanggal."' WHERE `id_korea` = '".$id_korea."'");
        if($sql_upload_playlist){
            echo '<script language = "javascript">
            alert("Data Berhasil Di Input") ;document.location = "admin.php";</script>';    
        }
        elseif($sql_upload_barat){
            echo '<script language = "javascript">
            alert("Data Berhasil Di Input") ;document.location = "admin.php";</script>';    
        }
        elseif($sql_upload_indo){
            echo '<script language = "javascript">
            alert("Data Berhasil Di Input") ;document.location = "admin.php";</script>';    
        }
        elseif($sql_upload_korea){
            echo '<script language = "javascript">
            alert("Data Berhasil Di Input") ;document.location = "admin.php";</script>';    
        }
        else{
            echo '<script language = "javascript">
            alert("Data Gagal Di Input");document.location = "admin.php"; </script>' ;    
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
            <li><a href="admin_edit.php">Edit Playlist</a></li>
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
                        <input type="text" name="artis" value = "<?php 
                            if($row_playlist> 1){
                                echo $row_playlist['Penyanyi'];
                            }
                            elseif($row_barat> 1){
                                echo $row_barat['Penyanyi'];
                            }
                            elseif($row_indo> 1){
                                echo $row_indo['Penyanyi'];
                            }
                            elseif($row_korea> 1){
                                echo $row_korea['Penyanyi'];
                            }
                            
                        ?>" ><br>
                        <label for="">Judul</label>
                        <input type="text" name="judul" value = "<?php 
                            if($row_playlist > 1){
                                echo $row_playlist['Lagu'];
                            } 
                            elseif($row_barat> 1){
                                echo $row_barat['Lagu'];
                            }
                            elseif($row_indo> 1){
                                echo $row_indo['Lagu'];
                            }
                            elseif($row_korea> 1){
                                echo $row_korea['Lagu'];
                            }
                        ?>" >
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