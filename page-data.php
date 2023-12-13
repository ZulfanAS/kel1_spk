<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
  include 'head.php';

  ?>
  <style>
    #jenis-k {
      font-weight: 400;
      color: #4F5D75;
      font-style: italic;
    }
    .button {
      
    }
  </style>
</head>

<body>
  <?php 
  include 'header.php';
  include 'sidebar.php';
  include 'data.php';
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
              <h5 class="card-title">Daftar Calon Penerima</h5>
              <p>Masyarakat kelurahan Nagka Kecamatan Binjau Utama, Kota Binjai.</p>
              <!-- Table with stripped rows -->
              <table class="table datatable table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <?php
                    for ($i=0; $i<count($kriteria); $i++){
                      echo "<th scope='col'>" . $kriteria[$i]['nama'];
                      echo "<br><small id='jenis-k'>" . $kriteria[$i]['jenis'] . "</small>";
                      echo "</th>";
                    }
                    ?>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($alternatif as $row){
                        echo "<tr id='" . $row['id'] . "'>";
                        echo "<th scope='row'>" . $row['id'] . "</th>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td> Rp" . number_format($row['c1'], 0, ",", ".") . "</td>";
                        echo "<td>" . $row['c2'] . " Orang </td>";
                        echo "<td>" . $row['c3'] . " m<sup>2</sup></td>";
                        echo "<td>" . $row['c4'] . "</td>";
                        echo "<td>" . $row['c5'] . "</td>";
                        echo "<td>" . $row['c6'] . "</td>";
                        echo "<td>" . $row['c7'] . "</td>";
                        echo "<td>" . $row['c8'] . "</td>";
                        echo "<td style='width: 7%'><a class='bi bi-pencil-square' style='font-size: 1.2rem' href='page-edit.php?id=". $row['id'] . "'></a>";
                        echo "<a class='bi bi-trash remove' style='font-size: 1.2rem' href='hapus-data.php?id=". $row['id'] . "'></a></td>";
                        echo "</tr>";
                    }
                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
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