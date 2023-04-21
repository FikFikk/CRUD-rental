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

    $query = "INSERT INTO `futsal` (`nama`, `telefon`, `tgl_booking`, `jam_booking`, `durasi_sewa`, `jml_pemain`, `no_lap`, `harga`, `depo`, `keterangan` )
        VALUES ('$nama', '$telefon', '$tgl_booking', '$jam_booking', '$durasi_sewa', '$jml_pemain', '$no_lap', '$harga', '$depo', '$keterangan')";
    
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

// if(isset($_GET['search'])){
//   // Filter kata kunci pencarian
//   $keyword = $_GET['keyword'];
//   $keyword = preg_replace("#[^0-9a-z]#i","",$keyword);

//   // Buat query pencarian data
//   $query = "SELECT * FROM futsal WHERE nama LIKE '%$keyword%'";

//   // Eksekusi query
//   $result = mysqli_query($koneksi, $query);

//   // Tampilkan hasil pencarian
//   if(mysqli_num_rows($result) > 0){
//     echo "<table>";
//     echo "<tr><th>ID</th><th>Nama</th><th>Nomor Telepon</th><th>Tanggal Booking</th><th>Jam Booking</th><th>Durasi Sewa</th><th>Jumlah Pemain</th><th>Nomor Lapangan</th><th>Harga Sewa</th><th>Uang Muka</th><th>Keterangan</th><th>Aksi</th></tr>";
//     while($row = mysqli_fetch_assoc($result)){
//       echo "<tr>";
//       echo "<td>".$row['id']."</td>";
//       echo "<td>".$row['nama']."</td>";
//       echo "<td>".$row['telefon']."</td>";
//       echo "<td>".$row['tgl_booking']."</td>";
//       echo "<td>".$row['jam_booking']."</td>";
//       echo "<td>".$row['durasi_sewa']."</td>";
//       echo "<td>".$row['jml_pemain']."</td>";
//       echo "<td>".$row['no_lap']."</td>";
//       echo "<td>".$row['harga']."</td>";
//       echo "<td>".$row['depo']."</td>";
//       echo "<td>".$row['keterangan']."</td>";
//       echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."'>Delete</a></td>";
//       echo "</tr>";
//     }
//     echo "</table>";
//   } else {
//     echo "Data tidak ditemukan.";
//   }
// }

// Fungsi Search

if(isset($_GET['search']) && $_GET['search'] != '') {
    $search = $_GET['search'];
    echo ($_GET['search']);
    $query = "SELECT * FROM `futsal` WHERE `nama` LIKE '%$search%'";
}else{
    $query = "SELECT * FROM `futsal`";
}


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
    $harga = $_POST['harga'];
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