<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "helpdesk");

//variabel nim yang dikirimkan form.php
$nim = $_GET['nip'];

//mengambil data
$query = mysqli_query($koneksi, "select * from user where nip='$nip'");
$user = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  $user['nama'],
            'divisi'      =>  $user['divisi'],

//tampil data
echo json_encode($data);
?>