<?php
    include 'data.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM alternatif WHERE id = ". $id;
        $result = mysqli_query($koneksi, $query);
        // jika data gagal diambil maka akan tampil error berikut
        if (!$result) {
          die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil dihapus.');</script>";
            header("Location: page-data.php");
            exit();
        }
    }
?>