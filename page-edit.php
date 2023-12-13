<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
  include 'head.php'; 
  include 'data.php';
  ?>
</head>

<body>
  <?php 
  include 'header.php';
  include 'sidebar.php';

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM alternatif WHERE id = ". $id;
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if (!$result) {
      die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
  }
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Penerima Bantuan</h1>      
      <br>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form Data Penerima</h5>

            <form class="row g-3" action="edit-data.php" method="post">
              <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
              <div class="col-md-12">
                <label for="inputNama" class="form-label">Nama Calon Penerima</label>
                <input type="text" class="form-control" id="inputNama" name="inputNama" value="<?php echo $data['nama']; ?>" required>
              </div>
              <hr>
              <div class="col-md-6">
                <label for="inputPenghasilan" class="form-label">Penghasilan</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">Rp.</span>
                  <input type="number" class="form-control" id="inputPenghasilan" name="inputPenghasilan" value="<?php echo $data['c1']; ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <label for="inputJumlahAnak" class="form-label">Jumlah Tanggungan Anak</label>
                <div class="input-group">
                  <input type="number" class="form-control" id="inputJumlahAnak" name="inputJumlahAnak" value="<?php echo $data['c2']; ?>" required>
                  <span class="input-group-text" id="basic-addon1">Orang</span>
                </div>
              </div>
              <hr>
              <div class="col-md-4">
                <label for="inputLuasTanah" class="form-label">Luas Tanah</label>
                <div class="input-group">
                  <input type="number" class="form-control" id="inputLuasTanah" name="inputLuasTanah" value="<?php echo $data['c3']; ?>" required>
                  <span class="input-group-text" id="basic-addon1">m<sup>2</sup></span>
                </div>
              </div>
              <div class="col-md-4">
                <label for="inputJenisDinding" class="form-label">Jenis Dinding Rumah</label>
                <select class="form-select" id="inputJenisDinding" name="inputJenisDinding" required>
                  <option hidden></option>
                  <option value="Batu" <?php echo ("Batu"==$data['c4']? 'selected': '') ?>>Batu</option>
                  <option value="Papan" <?php echo ("Papan"==$data['c4']? 'selected': '') ?>>Papan</option>
                  <option value="Tepas" <?php echo ("Tepas"==$data['c4']? 'selected': '') ?>>Tepas</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="inputKepemilikanRumah" class="form-label">Status Kepemilikan Rumah</label>
                <select class="form-select" id="inputKepemilikanRumah" name="inputKepemilikanRumah" required>
                  <option hidden></option>
                  <option value="Milik Sendiri" <?php echo ("Milik Sendiri"==$data['c5']? 'selected': '') ?>>Milik Sendiri</option>
                  <option value="Kontrak" <?php echo ("Kontrak"==$data['c5']? 'selected': '') ?>>Kontrak</option>
                  <option value="Menumpang" <?php echo ("Menumpang"==$data['c5']? 'selected': '') ?>>Menumpang</option>
                </select>
              </div>
              <!-- <hr> -->
              <div class="col-md-4">
                <label for="inputPenerangan" class="form-label">Sumber Penerangan</label>
                <select class="form-select" id="inputPenerangan" name="inputPenerangan" required>
                  <option hidden></option>
                  <option value="Listrik" <?php echo ("Listrik"==$data['c6']? 'selected': '') ?>>Listrik</option>
                  <option value="Sentir/Lilin" <?php echo ("Sentir/Lilin"==$data['c6']? 'selected': '') ?>>Sentir/Lilin</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="inputBahanBakar" class="form-label">Bahan Bakar Masak</label>
                <select class="form-select" id="inputBahanBakar" name="inputBahanBakar" required>
                  <option hidden></option>
                  <option value="LPG" <?php echo ("LPG"==$data['c7']? 'selected': '') ?>>LPG</option>
                  <option value="Minyak Tanah" <?php echo ("Minyak Tanah"==$data['c7']? 'selected': '') ?>>Minyak Tanah</option>
                  <option value="Kayu Bakar" <?php echo ("Kayu Bakar"==$data['c7']? 'selected': '') ?>>Kayu Bakar</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="inputPendidikan" class="form-label">Pendidikan Kepala Rumah Tangga</label>
                <select class="form-select" id="inputPendidikan" name="inputPendidikan" required>
                  <option hidden></option>
                  <option value="S1" <?php echo ("S1"==$data['c8']? 'selected': '') ?>>S1</option>
                  <option value="SMA" <?php echo ("SMA"==$data['c8']? 'selected': '') ?>>SMA</option>
                  <option value="SMP" <?php echo ("SMP"==$data['c8']? 'selected': '') ?>>SMP</option>
                </select>
              </div>
              <hr>
              <div class="text-center">
                <button type="submit" class="btn btn-primary" name="submit">Simpan Edit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form>

          </div>
        </div>

        </div>
      </div>
    </section>

  </main>

  <?php include 'footer.php';?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>