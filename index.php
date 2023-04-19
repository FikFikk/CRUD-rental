<?php require_once('fungsi.php'); ?>

<!DOCTYPE html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=	, initial-scale=1.0">
		<title>Penyewaan Lapangan Futsal</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container mt-3">
			<h2>Penyewaan Lapangan Futsal</h2>
      <br>
      <div class="row">
	      <div class="col-sm-4">
	          <a href="tambahdata.php" class="btn btn-primary col-sm-8">Pesan</a>
	      </div>
        <div class="col-sm-8">
            <form action="" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari..." name="cari" value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : '' ?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="cari" >Cari</button>
                        <button class="btn btn-outline-secondary" type="submit" name="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    	</div>
      <br>
      <table class="table table-hover">
	      <thead>
					<tr>
						<th>No</th>
            <th>Nama </th>
            <th>Telepon</th>
            <th>Tanggal Booking</th>
            <th>Jam Booking</th>
            <th>Durasi Sewa</th>
            <th>Jumlah Pemain</th>
            <th>Nomor Lapangan</th>
            <th>Harga Sewa</th>
            <th>Uang Muka</th>
            <th>Keterangan</th>
            <th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach ($data as $row) { ?>
	            <tr>
	                <td><?php echo $row['id']; ?></td>
	                <td><?php echo $row['nama']; ?></td>
	                <td><?php echo $row['telefon']; ?></td>
	                <td><?php echo $row['tgl_booking']; ?></td>
	                <td><?php echo $row['jam_booking']; ?></td>
	                <td><?php echo $row['durasi_sewa']; ?></td>
	                <td><?php echo $row['jml_pemain']; ?></td>
	                <td><?php echo $row['no_lap']; ?></td>
	                <td><?php echo $row['harga'] ?></td>
	                <td><?php echo $row['depo']; ?></td>
	                <td><?php echo $row['keterangan']; ?></td>
	                <td>
	                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
	                    <a href="index.php?hapus=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
	                </td>
	            </tr>
	        <?php } ?>
      	</tbody>
  		</table>
		</div>
	</body>
</html>