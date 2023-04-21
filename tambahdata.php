<?php require_once('fungsi.php'); ?>

<!DOCTYPE html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<h4 align="right" class="font-weight-light font-italic">*Isi data berikut sebagai data booking Anda</h4>
		<form action="" method="post" onsubmit="return validateForm()">
        	<div class="form-group row">
				  <label class="col-sm-2 col-form-label">Nama</label>
				  <div class="col-sm-10">
				   	<input type="text" class="form-control" name="nama" placeholder="Nama">
				  </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Nomor Telefon</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nama" name="telefon" placeholder="Nomor telefon">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="tgl_booking" class="col-sm-2 col-form-label">Tanggal Booking</label>
				    <div class="col-sm-10">
				      <input type="date" class="form-control" name="tgl_booking">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="jam_booking" class="col-sm-2 col-form-label">Jam Booking:</label>
				    <div class="col-sm-10">
				      <input type="time" class="form-control" name="jam_booking">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Jumlah Pemain</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="jml_pemain" placeholder="Jumlah Pemain">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Nomor Lapangan</label>
				    <div class="col-sm-10">
				      <select class="form-control" name="no_lap">
				      <option>Pilih Lapangan</option>
					    <option value="1">Lapangan 1</option>
					    <option value="2">Lapangan 2</option>
					    <option value="3">Lapangan 3</option>
					  </select>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="durasi_sewa" class="col-sm-2 col-form-label">Durasi Sewa</label>
				    <div class="col-sm-10">
				      <select id="durasi_sewa" class="form-control" name="durasi_sewa"  >
				      <option value="">Pilih Durasi Sewa</option>
					    <option value="1 Jam">1 jam</option>
					    <option value="2 Jam">2 jam</option>
					    <option value="3 Jam">3 jam</option>
					  </select>
				    </div>
				  </div>
				  <div class="form-group row price">
		            <label class="col-sm-2 col-form-label">Harga </label>
		            <div class="col-sm-10">
		            	<input type="text" name="harga" id="harga" class="form-control " placeholder="100.000 / jam" >
		            </div>
		          </div>
		          <div class="form-group row">
				    <label for="depo" class="col-sm-2 col-form-label">Uang Muka</label>
				    <div class="amount col-sm-10">
				      <input type="text" class="form-control" id="depo" name="depo" placeholder="Uang Muka">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
				    <div class="col-sm-10">
				    	<textarea class="form-control" name="keterangan" ></textarea>
				    </div>
				  </div>
				  <div align="right">
				  	<button type="submit" class="btn btn-primary col-sm-10" id="submit" name="submit">Pesan</button>
				  </div>
        </form>
	</div>
	<script>
		// onchange="showHarga()"
		// function showHarga() {
		//   var durasi_sewa = document.getElementById("durasi_sewa").value;
		//   var harga;

		//   // Set harga sesuai dengan durasi yang dipilih
		//   switch(durasi_sewa) {
		//     case "1 Jam":
		//       harga = 100000;
		//       break;
		//     case "2 Jam":
		//       harga = 200000;
		//       break;
		//     case "3 Jam":
		//       harga = 250000;
		//       break;
		//     default:
		//       harga = "";
		//   }

		//   // Tampilkan harga pada field harga
		//   document.getElementById("harga").value = harga;

		// }
		function validateForm() {
		  	var depo = document.getElementById("depo").value;
		  	if (depo == "") {
		    	alert("Anda harus membayar Uang muka Untuk memesannya");
		    	return false;
		  	}
		  	return true;
		}
	</script>
</body>
</html>