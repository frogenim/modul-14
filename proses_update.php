<?php
    include "koneksi.php";
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $jk = $_POST['jk'];
    
    $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : '';


    if (isset($_POST['ekskul'])) {
        $ekskul = implode(", ", $_POST['ekskul']);
    }

    $query = "UPDATE tb_ekskul SET nama='$nama', kelas='$kelas', ttl='$ttl', alamat='$alamat', kota='$kota', jk='$jk', hobi='$hobi', ekskul='$ekskul' WHERE nis='$nis';";
    $hasil = mysqli_query($koneksi,$query);
    if ($hasil) {
        header('location:tampil.php');
    } else {
        echo "Gagal Update Data";
        echo mysqli_error();
    }
?>