<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
  include 'head.php';
  include 'data.php';
  include 'moora.php';
  ?>
</head>

<body>
  <?php 
  include 'header.php';
  include 'sidebar.php';
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Hasil Perangkingan Penerimaan Bantuan</h1>      
      <br>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hasil Perhitungan</h5>
              <p>Perhitungan menggunakan metode MOORA.</p>

              <!-- Table with stripped rows -->
              <table class="table datatable table-hover">
                <thead>
                  <tr>
                    <th>ID Penerima</th>
                    <th>Nama Penerima</th>
                    <th>Max</th>
                    <th>Min</th>
                    <th>Y</th>
                    <th>Rank</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $y = moora($alternatif, $kriteria);
                  $no = 0;
                  foreach ($y as $row){
                      echo "<tr>";
                      echo "<th scope='row'>" . $row['alt'] . "</th>";
                      $key = array_search($row['alt'], array_column($alternatif, 'id'));
                      echo "<td>" . $alternatif[$key]['nama'] . "</td>";
                      echo "<td>" . number_format($row['max'], 5) . "</td>";
                      echo "<td>" . number_format($row['min'], 5) . "</td>";
                      echo "<td>" . number_format($row['y'], 5) . "</td>";
                      echo "<td>" . (++$no) . "</td>";
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