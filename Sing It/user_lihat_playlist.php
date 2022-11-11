<?php
    require('koneksi.php');
    session_start();
    if ( !isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
    }
?>
<?php 
    $id_user = $_SESSION['id_user'];
    if(isset($_GET['id_lagu'])){
        $id_lagu = $_GET['id_lagu'];
        $id_user = $_SESSION['id_user'];
        $sql = mysqli_query($conn_log, "INSERT INTO `playlist`(`id_user`, `id_lagu`) VALUES ('".$id_user."','".$id_lagu."')");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style_user_lihat_playlist.css?v2">
        
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
    <div class="ContentPlace">
        <h1><?php echo $_SESSION['nama'] ?>'s Playlist</h1>
        <table class="artis">
            <tr>
                <th>Artis</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th></th>
            </tr>
            <tr>
            <?php 
                $lihat_playlist = mysqli_query($conn_log, "SELECT * FROM `playlist` WHERE `id_user` = '".$id_user."'");
                while($row = mysqli_fetch_array($lihat_playlist)){
                    $lagu = $row['id_lagu'];
                    $query= "SELECT * FROM lagu WHERE `id_lagu` = '".$lagu."'";
                    $read = mysqli_query($conn_log, $query);
                    while($row = mysqli_fetch_assoc($read)){
                ?>
                <td><?php echo $row['Penyanyi'] ?></td>
                <td><?php echo $row['Lagu'] ?></td>
                <td><img src="file/<?php echo $row['Gambar']?>" alt=""></td>
                <td>
                    <a href="play.php?id_lagu=<?=$row['id_lagu'];?>">
                        <img id ="icon" src="img/play.png" alt="play" >
                    </a>
                    <br>
                    <br>
                    <a href="hapus_playlist.php?id_lagu=<?=$row['id_lagu'];?>">
                    <img id ="icon" src="img/bin.png" alt="play" >
                    </a>
                </td>
            </tr>
            <?php } }?>
        </table>
    </div>
    <br>
    <br>
    <br>
    <div id="about">
        <div>
            <h1>AboutMe</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, distinctio accusantium? Aperiam qui perferendis eius odit fugit ullam dignissimos dolorum eaque! Eos veritatis provident deleniti totam amet, nemo iusto rem exercitationem alias. Sit atque accusantium omnis blanditiis ea illo eius, adipisci cupiditate assumenda eligendi fugiat? Quae quod inventore nihil magni nobis in corporis fugit maxime repellat, dolores eligendi nam obcaecati amet, iusto laborum excepturi ad porro similique? Porro illo quas ab molestias rerum. Rerum illo ipsam animi, dolores pariatur, saepe facere maxime quod, aperiam quasi harum esse quisquam sapiente perspiciatis nam porro molestiae eum asperiores soluta hic iste consequuntur fugit!</p>
        </div>
    </div>

    
    <footer>
        <p>Copyright. Yanuar Gideon Simalango</p>
    </footer>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>