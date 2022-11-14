<?php
    require('koneksi.php');
    session_start();
    if (!isset($_SESSION['login'])){
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
    <link rel="stylesheet" href="stylesheet/style.css?v6">
        
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
    <div class="ContentPlace">
        <div class="ContainerContent">
            <div class="slidecontent">
                <div class="content"  style="background-image: url(img/barat.png);">
                    <a href="user_lihat_barat.php">
                        <div>
                            <h3>Top 10 Barat</h3>
                        </div>
                    </a>
                </div>
                <div class="content"  style="background-image: url(img/indo.png);">
                    <a href="user_lihat_indo.php">
                        <div>
                            <h3>Top 10 Indonesia</h3>
                        </div>
                    </a>
                </div> 
                <div class="content"  style="background-image: url(img/new.png);">
                    <a href="user_lihat_korea.php">
                        <div>
                            <h3>Top 10 Korea</h3>
                        </div>
                    </a>
                </div>  
            </div>
        </div>
        <div class="containeralbum">
            <div class="artisini">
                <a href="artis.php">
                    <div class="gambarartis" style="background-image: url(img/tiara.jfif);">
                    </div>
                </a>
            </div>
            <div class="artisini">
                <a href="artis.php">
                    <div class="gambarartis" style="background-image: url(img/fabio.jfif);">
                        
                    </div>
                </a>
            </div>
            <div class="artisini">
                <a href="artis.php">
                    <div class="gambarartis" style="background-image: url(img/mahalini.jfif);">
                    </div>
                </a>
            </div>
        </div>
        <div class = "box">
            <form class="box-cari" method= "get" action="">
                <input type="text" placeholder= "Cari Lagu ..." name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];} ?>">
                <br>
                <button type="submit"><img src="img/search.png"></button>
            </form>  
        </div>
        <div class = "table" style = "overflow-x : auto;">
            <table>
                <tr>
                    <th>Artis</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th></th>
                </tr>
                
                <?php 
                    include "koneksi.php";
                    if (isset($_GET['cari'])){
                        $pencarian= $_GET['cari'];
                        $query = "SELECT * FROM lagu WHERE Penyanyi LIKE '%".$pencarian."%' OR Lagu LIKE '%".$pencarian."%'";  
                    }else{
                        $query= "SELECT * FROM lagu";
                    }


                    $read = mysqli_query($conn_log, $query);
                    while($row = mysqli_fetch_assoc($read)){
                ?>
                <tr>
                    <td><?php echo $row['Penyanyi'] ?></td>
                    <td><?php echo $row['Lagu'] ?></td>
                    <td><img src="file/<?php echo $row['Gambar']?>" alt=""></td>
                    <td>
                        <a href="user_lihat_playlist.php?id_lagu=<?=$row['id_lagu'];?>">
                            <img id="icon" src="img/add.png" alt="play" >
                        </a>
                        <br>
                        <br>
                        <a href="play.php?id_lagu=<?=$row['id_lagu'];?>">
                            <img id ="icon" src="img/play.png" alt="play" >
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <div id="about">
        <div>
            <h1>AboutMe</h1>
            <p>Sing It merupakan sebuah website layanan pemutaran musik. Website ini dapat menampilkan serta mengelola data lagu dan data user oleh sebuah Admin, dan User dapat memutar lagu berdasarkan playlist yang dibuat, 10 top korea, 10 top indonesia dan 10 top barat. 
                Sebelum website ini dikelola Admin harus login terlebih dahulu, sedangkan User jika belum mempunyai akun harus melakukan registrasi terlebih dahulu kemudian melakukan login. Website ini dikembangkan oleh Yanuar Gideon Simalango, Ega Sulfika dan Fathia Nuq Qamarina.
                Mahasiswa Program Study Informatika, Fakultas Teknik, Universitas Mulawarman.
            </p>
        </div>
    </div>
    
    
    <footer>
        <p>Copyright. Yanuar Gideon Simalango</p>
    </footer>
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>