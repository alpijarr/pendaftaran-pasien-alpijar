<?php

include "koneks.php";

$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$poli = $_POST['poli'];

$simpan = $koneks->query("insert into input_pasien (tanggal,nama,alamat,umur,poli) values ('$tanggal','$nama','$alamat','$umur','$poli')");

?>

<script>
    document.location.href = 'tampil.php';
</script>