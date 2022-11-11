<?php 

require 'koneksi.php';

session_start();
    if ( !isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
    }

if(isset($_GET['id_lagu'])){
    $id_lagu = $_GET['id_lagu'];
    $hapus_lagu = mysqli_query($conn_log, "DELETE FROM `lagu` WHERE `id_lagu` = '".$id_lagu."'");
    if($hapus_lagu){
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