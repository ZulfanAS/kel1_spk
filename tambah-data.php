<?php
    include 'data.php';

    if (isset($_POST['submit'])){
        $nama = $_POST['inputNama'];
        $penghasilan = $_POST['inputPenghasilan'];
        $jumlah_anak = $_POST['inputJumlahAnak'];
        $luas_tanah = $_POST['inputLuasTanah'];
        $jenis_dinding = $_POST['inputJenisDinding'];
        $kepemilikan_rumah = $_POST['inputKepemilikanRumah'];
        $penerangan = $_POST['inputPenerangan'];
        $bahan_bakar = $_POST['inputBahanBakar'];
        $pendidikan = $_POST['inputPendidikan'];

        $query = "INSERT INTO alternatif (nama, c1, c2, c3, c4, c5, c6, c7, c8) VALUES ('$nama', $penghasilan, $jumlah_anak, $luas_tanah, '$jenis_dinding', '$kepemilikan_rumah', '$penerangan', '$bahan_bakar', '$pendidikan')";
        $result = mysqli_query($koneksi, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        } else {
            //tampil alert dan akan redirect ke halaman ../../layout/main.php?page=barang
            //silahkan ganti ../../layout/main.php?page=barang sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil ditambah.');</script>";
        }
        header("Location: page-data.php");
        exit();
    }

?>