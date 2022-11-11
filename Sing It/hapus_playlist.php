<?php 

require 'koneksi.php';

session_start();
    if ( !isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
    }

if(isset($_GET['id_lagu'])){
    $id_lagu = $_GET['id_lagu'];
    $hapus_lagu = mysqli_query($conn_log, "DELETE FROM `playlist` WHERE `id_lagu` = '".$id_lagu."'");
    if($hapus_lagu){
        echo '<script language = "javascript">
        alert("Hapus Berhasil"); document.location = "home.php";</script>' ;
    }
}
