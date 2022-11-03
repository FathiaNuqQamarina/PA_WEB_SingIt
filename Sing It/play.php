<?php
    require('koneksi.php');
?>

<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $hasil = mysqli_query($conn_log, "SELECT * FROM playlist WHERE id = '".$id."' ");
        $row = mysqli_fetch_array($hasil);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style_play.css?v6">
        
</head>
<body >
    <nav class="Navigator">
        <div class="Brand">
            <div id="Depan" onclick="ubahheader()">Sing</div>
            <div id="Belakang" onclick="ubahheader1()">It</div>
        </div>
        <ul >
            <li><a href="home.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="">Artist</a></li>
            <li><a href="">Album</a></li>
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
            <img src="file/<?php echo $row['Gambar']?>" alt="">
        </div>
        <div class = "ketlagu">
            <h4><?php echo $row['Lagu']?></h4>
            <h5><?php echo $row['Penyanyi']?></h5>
            
        </div>
        <div class = "playlagu">
            <audio controls>
                <source src="file/<?php echo $row['File']?>" type="audio/mp3">
            </audio>  
        </div>
    </div>
    <p>Copyright. Yanuar Gideon Simalango</p>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>