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

            <form class="row g-3" action="tambah-data.php" method="post">
              <div class="col-md-12">
                <label for="inputNama" class="form-label">Nama Calon Penerima</label>
                <input type="text" class="form-control" id="inputNama" name="inputNama" required>
              </div>
              <hr>
              <div class="col-md-6">
                <label for="inputPenghasilan" class="form-label">Penghasilan</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">Rp.</span>
                  <input type="number" class="form-control" id="inputPenghasilan" name="inputPenghasilan" required>
                </div>
              </div>
              <div class="col-md-6">
                <label for="inputJumlahAnak" class="form-label">Jumlah Tanggungan Anak</label>
                <div class="input-group">
                  <input type="number" class="form-control" id="inputJumlahAnak" name="inputJumlahAnak" required>
                  <span class="input-group-text" id="basic-addon1">Orang</span>
                </div>
              </div>
              <hr>
              <div class="col-md-4">
                <label for="inputLuasTanah" class="form-label">Luas Tanah</label>
                <div class="input-group">
                  <input type="number" class="form-control" id="inputLuasTanah" name="inputLuasTanah" required>
                  <span class="input-group-text" id="basic-addon1">m<sup>2</sup></span>
                </div>
              </div>
              <div class="col-md-4">
                <label for="inputJenisDinding" class="form-label">Jenis Dinding Rumah</label>
                <select class="form-select" id="inputJenisDinding" name="inputJenisDinding" required>
                  <option hidden></option>
                  <option value="Batu">Batu</option>
                  <option value="Papan">Papan</option>
                  <option value="Tepas">Tepas</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="inputKepemilikanRumah" class="form-label">Status Kepemilikan Rumah</label>
                <select class="form-select" id="inputKepemilikanRumah" name="inputKepemilikanRumah" required>
                  <option hidden></option>
                  <option value="Milik Sendiri">Milik Sendiri</option>
                  <option value="Kontrak">Kontrak</option>
                  <option value="Menumpang">Menumpang</option>
                </select>
              </div>
              <!-- <hr> -->
              <div class="col-md-4">
                <label for="inputPenerangan" class="form-label">Sumber Penerangan</label>
                <select class="form-select" id="inputPenerangan" name="inputPenerangan" required>
                  <option hidden></option>
                  <option value="Listrik">Listrik</option>
                  <option value="Sentir/Lilin">Sentir/Lilin</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="inputBahanBakar" class="form-label">Bahan Bakar Masak</label>
                <select class="form-select" id="inputBahanBakar" name="inputBahanBakar" required>
                  <option hidden></option>
                  <option value="LPG">LPG</option>
                  <option value="Minyak Tanah">Minyak Tanah</option>
                  <option value="Kayu Bakar">Kayu Bakar</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="inputPendidikan" class="form-label">Pendidikan Kepala Rumah Tangga</label>
                <select class="form-select" id="inputPendidikan" name="inputPendidikan" required>
                  <option hidden></option>
                  <option value="S1">S1</option>
                  <option value="SMA">SMA</option>
                  <option value="SMP">SMP</option>
                </select>
              </div>
              <hr>
              <div class="text-center">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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