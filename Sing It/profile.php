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
    <link rel="stylesheet" href="stylesheet/style_user_lihat_playlist.css?v9">
        
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
            <!-- <li><a href="#about">About</a></li> -->
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
    <div class="Profilebody">
        <div class="profile"> 
            <img class="circular--square" src="profile/<?php echo $data['gambar']?>" alt="" /> 
            <br>
            <br>
            <h3>Nama : <?php echo $data['nama'] ?></h3>
            <h3>Username : <?php echo $data['username'] ?></h3>
            <br>
            <a href="edit_profile.php" class="btn-edit">Edit Profile</a>
            <a href="user_lihat_playlist.php" class="btn-edit"> My Playlist</a>
        </div>
    </div>
    
    <footer>
        <p>Copyright. Yanuar Gideon Simalango</p>
    </footer>
        
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>


