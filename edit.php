<?php require_once('fungsi.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <h1>Edit Data</h1>
        <br>
        <div class="row">
            
                <form method="post" action="">
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  
                   
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor Telefon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="telefon" value="<?php echo $data['telefon']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tgl_booking" class="col-sm-2 col-form-label">Tanggal Booking</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="tgl_booking" value="<?php echo $data['tgl_booking']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jam_booking" class="col-sm-2 col-form-label">Jam Booking:</label>
                    <div class="col-sm-10">
                      <input type="time" class="form-control" name="jam_booking" value="<?php echo $data['jam_booking']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jumlah Pemain</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jml_pemain" value="<?php echo $data['jml_pemain']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor Lapangan</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="no_lap" value="<?php echo $data['no_lap']; ?>">
                      <option>Pilih Lapangan</option>
                        <option value="1">Lapangan 1</option>
                        <option value="2">Lapangan 2</option>
                        <option value="3">Lapangan 3</option>
                      </select>
                    </div>
                  </div>
                  <
                  </div>
                  <div class="form-group row">
                    <label for="durasi_sewa" class="col-sm-2 col-form-label">Durasi Sewa</label>
                    <div class="col-sm-10">
                      <select id="durasi_sewa" class="form-control" name="durasi_sewa" value="<?php echo $data['durasi_sewa']; ?>" onchange="showHarga()" >
                      <option value="">Pilih Durasi Sewa</option>
                      <option value="1 Jam">1 jam</option>
                      <option value="2 Jam">2 jam</option>
                      <option value="3 Jam">3 jam</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row price">
                    <label class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" id="harga" name="harga" disabled="" class="form-control " value="<?php echo $data['harga']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="depo" class="col-sm-2 col-form-label">Uang Muka</label>
                    <div class="amount col-sm-10">
                      <input type="text" class="form-control" name="depo" value="<?php echo $data['depo']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="keterangan" value="<?php echo $data['keterangan']; ?>"></textarea>
                    </div>
                  </div>
                  <div align="right">
                    <button type="submit" name="update" class="btn btn-primary col-sm-10 mt-3">Update</button>
                  </div>
                  
                    
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      function showHarga() {
      var durasi_sewa = document.getElementById("durasi_sewa").value;
      var harga;

      // Set harga sesuai dengan durasi yang dipilih
      switch(durasi_sewa) {
        case "1 Jam":
          harga = 100000;
          break;
        case "2 Jam":
          harga = 200000;
          break;
        case "3 Jam":
          harga = 250000;
          break;
        default:
          harga = "";
      }

      // Tampilkan harga pada field harga
      document.getElementById("harga").value = harga;
    }

    </script>
</body>

</html>