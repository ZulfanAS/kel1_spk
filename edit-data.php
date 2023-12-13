<?php
    include 'data.php';

    if (isset($_POST['submit'])){
        $id = $_POST['id'];
        $nama = $_POST['inputNama'];
        $penghasilan = $_POST['inputPenghasilan'];
        $jumlah_anak = $_POST['inputJumlahAnak'];
        $luas_tanah = $_POST['inputLuasTanah'];
        $jenis_dinding = $_POST['inputJenisDinding'];
        $kepemilikan_rumah = $_POST['inputKepemilikanRumah'];
        $penerangan = $_POST['inputPenerangan'];
        $bahan_bakar = $_POST['inputBahanBakar'];
        $pendidikan = $_POST['inputPendidikan'];

        $query = "UPDATE alternatif SET nama = '$nama', c1 = $penghasilan, c2 = $jumlah_anak, c3 = $luas_tanah, c4 = '$jenis_dinding', c5 = '$kepemilikan_rumah', c6 = '$penerangan', c7 = '$bahan_bakar', c8 = '$pendidikan' WHERE id = $id;";
        $result = mysqli_query($koneksi, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil diubah.');</script>";
            header("Location: page-data.php");
            exit();
        }
    }

?>