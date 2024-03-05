<?php
include "koneks.php";
$id = $_GET['id'];
$delete = $koneks->query("delete from input_pasien where no ='$id'");


?>
<script>
    document.location.href = 'tampil.php'
</script>