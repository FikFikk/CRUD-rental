<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'penyewaan';

$koneksi = mysqli_connect($host, $username, $password, $database);


// $query = "SELECT * FROM futsal";
// $hasil = mysqli_query($koneksi, $query);
// if ($hasil) {
//         echo "Location: index.php";
//     } else {
//         die('invalid Query : ' . mysqli_error($koneksi));
// }

// Fungsi Create
if (isset($_POST['submit'])) {
    $id =  $_POST['id'];
    $nama = $_POST['nama'];
    $telefon = $_POST['telefon'];
    $tgl_booking = $_POST['tgl_booking'];
    $jam_booking = $_POST['jam_booking'];
    $durasi_sewa = $_POST['durasi_sewa'];
    $jml_pemain = $_POST['jml_pemain'];
    $no_lap = $_POST['no_lap'];
    $harga = $_POST['harga'];
    $depo = $_POST['depo'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO `futsal` (`id`, `nama`, `telefon`, `tgl_booking`, `jam_booking`, `durasi_sewa`, `jml_pemain`, `no_lap`, `harga`, `depo`, `keterangan` ) VALUES ('$id', '$nama', '$telefon', '$tgl_booking', '$jam_booking', '$durasi_sewa', '$jml_pemain', '$no_lap', '$harga', '$depo', '$keterangan')";
    
    $hasil = mysqli_query($koneksi, $query);
    // Eksekusi query
    if ($hasil) {
        header ("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
    
    // $result = mysqli_query($this->koneksi, $query) or die(mysqli_error($this->koneksi)); 
    // if ($result) {
    //     header('Location: index.php');
    // } else if ($koneksi -> connect_errno) {
    //     echo 'Gagal menambahkan data';
    // }
    // return true;
}

// Fungsi Search
// if(isset($_GET['cari']) && $_GET['cari'] != '') {
//     $cari = $_GET['cari'];
//     $query = "SELECT * FROM `futsal` WHERE `id` LIKE '%$cari%' OR `nama` LIKE '%$cari%' OR `telefon` LIKE '%$cari%' OR `tgl_booking` 
//         LIKE '%$cari%' OR `jam_booking` LIKE '%$cari%' OR `durasi_sewa` LIKE '%$cari%' OR `jml_pemain` 
//         LIKE '%$cari%' OR `no_lap` LIKE '%$cari%' OR `keterangan` LIKE '%$cari%'";
// }else{
//     $query = "SELECT * FROM `futsal`";
// }

//Fungsi Read
$query = "SELECT * FROM futsal";
$hasil = mysqli_query($koneksi, $query);

$data = array();

while ($row = mysqli_fetch_assoc($hasil)) {
    $data[] = $row;
}

// fungsi detail
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM futsal WHERE id='$id'";

    $hasil = mysqli_query($koneksi, $query);

    $data = mysqli_fetch_assoc($hasil);
}


// Fungsi Update
if (isset($_POST['update'])) {
    $id =  $_POST['id'];
    $nama = $_POST['nama'];
    $telefon = $_POST['telefon'];
    $tgl_booking = $_POST['tgl_booking'];
    $jam_booking = $_POST['jam_booking'];
    $durasi_sewa = $_POST['durasi_sewa'];
    $jml_pemain = $_POST['jml_pemain'];
    $no_lap = $_POST['no_lap'];
    $harga = str_replace('.', '', $_POST['harga']);
    $depo = $_POST['depo'];
    $keterangan = $_POST['keterangan'];

    $query = "UPDATE `futsal` SET `id` = '$id', `nama` = '$nama', `telefon` = '$telefon',
        `tgl_booking` = '$tgl_booking', `jam_booking` = '$jam_booking', `durasi_sewa` = '$durasi_sewa', `jml_pemain` = '$jml_pemain',
        `no_lap` = '$no_lap', `harga` = '$harga', `depo` = '$depo', `keterangan` = '$keterangan' WHERE `id` = '$id'";
    if (mysqli_query($koneksi, $query)) {
        header('Location: index.php');
    } else {
        echo 'Gagal mengupdate data';
    }
}

// Fungsi Delete
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $query = "DELETE FROM `futsal` WHERE `id` = '$id'";
    if (mysqli_query($koneksi, $query)) {
        header('Location: index.php');
    } else {
        echo 'Gagal menghapus data';
    }
}

//menutup koneksi ke database
mysqli_close($koneksi);
?>