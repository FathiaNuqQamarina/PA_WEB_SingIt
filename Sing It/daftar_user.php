<?php
    require('koneksi.php');
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
    <link rel="stylesheet" href="stylesheet/style_daftar_user.css?v5">
        
</head>
<body >
    <nav class="Navigator">
        <div class="Brand">
            <div id="Depan" onclick="ubahheader()">Sing</div>
            <div id="Belakang" onclick="ubahheader1()">It</div>
        </div>
        <ul >
        <li><a href="admin.php">Home</a></li>
            <li><a href="admin_tambah.php">Add lagu</a></li>
            <li><a href="admin_edit.php">Edit lagu</a></li>
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
        <h1>Daftar Data User</h1>
        <div>
        <form class="box-cari" method= "get" action="">
            <input type="text" placeholder= "Cari Nama ..." name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];} ?>">
            <br>
            <button type="submit"><img src="img/search.png"></button>
        </form>  
        </div>
        <table >
            <tr>
                <th>Nama</th>
                <th>Username</th>
            </tr>
            
            <?php 
                include "koneksi.php";
                if (isset($_GET['cari'])){
                    $pencarian= $_GET['cari'];
                    $query = "SELECT * FROM login WHERE nama LIKE '%".$pencarian."%' OR username LIKE '%".$pencarian."%'";  
                }else{
                    $query= "SELECT * FROM login";
                }

                $read = mysqli_query($conn_log, $query);
                while($row = mysqli_fetch_assoc($read)){
            ?>
            <tr>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['username'] ?></td>

            </tr>
            <?php } ?>
        </table>
    </div>   
    
    <script src="script/sctipt.js">
    </script>
    
</body>
<footer>
    <p>Copyright. Yanuar Gideon Simalango</p>
</footer>
</html>