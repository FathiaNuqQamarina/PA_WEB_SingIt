<?php 

require 'koneksi.php';

if(isset($_GET['id_playlist'])){
    $id_playlist = $_GET['id_playlist'];
    $hapus_playlist = mysqli_query($conn_log, "DELETE FROM `playlist` WHERE `id_playlist` = '".$id_playlist."'");
    if($hapus_playlist){
        echo '<script language = "javascript">
        alert("Hapus Berhasil"); document.location = "admin.php";</script>' ;
    }
}
elseif(isset($_GET['id_barat'])){
    $id_barat = $_GET['id_barat'];
    $hapus_barat = mysqli_query($conn_log, "DELETE FROM `topbarat` WHERE `id_barat` = '".$id_barat."'");
    if($hapus_barat){
        echo '<script language = "javascript">
        alert("Hapus Berhasil"); document.location = "admin.php";</script>' ;
    }
}
elseif(isset($_GET['id_indo'])){
    $id_indo = $_GET['id_indo'];
    $hapus_indo = mysqli_query($conn_log, "DELETE FROM `topindo` WHERE `id_indo` = '".$id_indo."'");
    if($hapus_indo){
        echo '<script language = "javascript">
        alert("Hapus Berhasil"); document.location = "admin.php";</script>' ;
    }
}
elseif(isset($_GET['id_korea'])){
    $id_korea = $_GET['id_korea'];
    $hapus_korea = mysqli_query($conn_log, "DELETE FROM `topkorea` WHERE `id_korea` = '".$id_korea."'");
    if($hapus_korea){
        echo '<script language = "javascript">
        alert("Hapus Berhasil"); document.location = "admin.php";</script>' ;
    }
}