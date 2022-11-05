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
    <link rel="stylesheet" href="stylesheet/style_artis.css?v2">
        
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
    <h1>Daftar Artis</h1>
    <div class="containeralbum">
            <div style="background-image: url(img/tiara.jfif);">
                <a href="artis.php">
                    <div>
                        <h3>Tiara Andini</h3>
                    </div>
                </a>
            </div>
            <div style="background-image: url(img/fabio.jfif);">
                <a href="artis.php">
                    <div>
                        <h3>Fabio Asher</h3>
                    </div>
                </a>
            </div>
            <div style="background-image: url(img/mahalini.jfif);">
                <a href="artis.php">
                    <div>
                        <h3>Mahalini</h3>
                    </div>
                </a>
            </div>
        </div>
    
    <p>Copyright. Yanuar Gideon Simalango</p>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>