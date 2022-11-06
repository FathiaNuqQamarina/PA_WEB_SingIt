<?php
    require('koneksi.php');
    
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
            <li><a href="home.php">Home</a></li>
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
            <div style="background-image: url(img/tiara.jfif);">
                    <a href="artis.php">
                        <div>
                            <h3></h3>
                        </div>
                    </a>
            </div>
            <div style="background-image: url(img/fabio.jfif);">
            </div>
            <div style="background-image: url(img/mahalini.jfif);">
            </div>
        </div>
        <div>
        <form id="box-cari" method= "get" action="">
            <input type="text" placeholder= "Cari Lagu ..." name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];} ?>">
            <br>
            <button type="submit">Cari</button>
        </form>  
        </div>
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
                    $query = "SELECT * FROM playlist WHERE Penyanyi LIKE '%".$pencarian."%' OR Lagu LIKE '%".$pencarian."%'";  
                }else{
                    $query= "SELECT * FROM playlist";
                }


                $read = mysqli_query($conn_log, $query);
                while($row = mysqli_fetch_assoc($read)){
            ?>
            <tr>
                <td><?php echo $row['Penyanyi'] ?></td>
                <td><?php echo $row['Lagu'] ?></td>
                <td><img src="file/<?php echo $row['Gambar']?>" alt=""></td>
                <td>
                    <a href="">
                        <img id="icon" src="img/add.png" alt="play" >
                    </a>
                    <br>
                    <br>
                    <a href="play.php?id_playlist=<?=$row['id_playlist'];?>">
                        <img id ="icon" src="img/play.png" alt="play" >
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div id="about">
        <div>
            <h1>AboutMe</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, distinctio accusantium? Aperiam qui perferendis eius odit fugit ullam dignissimos dolorum eaque! Eos veritatis provident deleniti totam amet, nemo iusto rem exercitationem alias. Sit atque accusantium omnis blanditiis ea illo eius, adipisci cupiditate assumenda eligendi fugiat? Quae quod inventore nihil magni nobis in corporis fugit maxime repellat, dolores eligendi nam obcaecati amet, iusto laborum excepturi ad porro similique? Porro illo quas ab molestias rerum. Rerum illo ipsam animi, dolores pariatur, saepe facere maxime quod, aperiam quasi harum esse quisquam sapiente perspiciatis nam porro molestiae eum asperiores soluta hic iste consequuntur fugit!</p>
        </div>
    </div>
    <p>Copyright. Yanuar Gideon Simalango</p>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>