<?php
    require('koneksi.php');
    session_start();
    if ( !isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
    }
?>

<?php 
    if(isset($_GET['id_lagu'])){
        $id_lagu = $_GET['id_lagu'];
        $hasil_lagu = mysqli_query($conn_log, "SELECT * FROM lagu WHERE id_lagu = '".$id_lagu."' ");
        $row_lagu = mysqli_fetch_array($hasil_lagu);
        $row_barat = 0;
        $row_indo = 0;
        $row_korea = 0;
    }
    elseif(isset($_GET['id_barat'])){
        $id_barat = $_GET['id_barat'];
        $hasil_barat = mysqli_query($conn_log, "SELECT * FROM topbarat WHERE id_barat = '".$id_barat."' ");
        $row_barat = mysqli_fetch_array($hasil_barat);
        $row_lagu = 0;
        $row_indo = 0;
        $row_korea = 0;
    }
    elseif(isset($_GET['id_indo'])){
        $id_indo = $_GET['id_indo'];
        $hasil_indo = mysqli_query($conn_log, "SELECT * FROM topindo WHERE id_indo = '".$id_indo."' ");
        $row_indo = mysqli_fetch_array($hasil_indo);
        $row_lagu = 0;
        $row_barat = 0;
        $row_korea = 0;
    }
    elseif(isset($_GET['id_korea'])){
        $id_korea = $_GET['id_korea'];
        $hasil_korea = mysqli_query($conn_log, "SELECT * FROM topkorea WHERE id_korea = '".$id_korea."' ");
        $row_korea = mysqli_fetch_array($hasil_korea);
        $row_lagu = 0;
        $row_barat = 0;
        $row_indo = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style_play.css?v2">
        
</head>
<body >
    <nav class="Navigator">
        <div class="Brand">
            <div id="Depan" onclick="ubahheader()">Sing</div>
            <div id="Belakang" onclick="ubahheader1()">It</div>
        </div>
        <ul >
            <li><a href="home.php">Profile</a></li>
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
    <div class = "container">
        <div class = "gambar">
            <img src="file/<?php 
                if($row_lagu> 1){
                    echo $row_lagu['Gambar'];
                }
                elseif($row_barat> 1){
                    echo $row_barat['Gambar'];
                }
                elseif($row_indo> 1){
                    echo $row_indo['Gambar'];
                }
                elseif($row_korea> 1){
                    echo $row_korea['Gambar'];
                }
            ?>" alt="">
        </div>
        <div class = "ketlagu">
            <h4>
                <?php 
                    if($row_lagu> 1){
                        echo $row_lagu['Lagu'];
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
                ?>
            </h4>
            <h5>
                <?php
                    if($row_lagu> 1){
                        echo $row_lagu['Penyanyi'];
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
                ?>
            </h5>
            
        </div>
        <div class = "playlagu">
            <audio controls>
                <source src="file/<?php
                        if($row_lagu> 1){
                            echo $row_lagu['File'];
                        }
                        elseif($row_barat> 1){
                            echo $row_barat['File'];
                        }
                        elseif($row_indo> 1){
                            echo $row_indo['File'];
                        }
                        elseif($row_korea> 1){
                            echo $row_korea['File'];
                        }
                    ?>" type="audio/mp3">
            </audio>  
        </div>
    </div>
    <footer>
        <p>Copyright. Yanuar Gideon Simalango</p>
    </footer>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>