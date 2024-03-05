<?php
include "koneks.php";
include "boot.php";
$id = $_GET['id'];
$tampil = $koneks->query("select * from input_pasien where no='$id'");
$b = $tampil->fetch_array();

?>


<body>
  <!-- bagian from  -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-4">

        <body background="poto.jpg" alt="" width="100%">
          <form action="" method="post">
            <h3></h3>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">tanggal</label>
              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal" value="<?php echo $b['tanggal']; ?>">

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?php echo $b['nama']; ?>">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">poli</label>
                  <input name="poli" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $b['poli']; ?>">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" value="<?php echo $b['alamat']; ?>">


                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">umur</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="umur" value="<?php echo $b['umur']; ?>">



                    <br>
                    <button type="submit" class="btn btn-danger" name="update">Simpan</button>
          </form>
      </div>
    </div>
    <!-- tutup from -->

    <!-- ini bagian tampil -->
    <br>
    <!-- <iframe src="tampil.php" frameborder="0"widht="700" height="500"></iframe> -->
    <!-- tutup tampil -->

  </div>

  <?php

  ?>

</body>

</html>

<?php
if (isset($_POST['update'])) {
  $update = $koneks->query("update input_pasien set tanggal='$_POST[tanggal]',nama='$_POST[nama]',alamat='$_POST[alamat]',umur='$_POST[umur]',poli='$_POST[poli]' where no='$id'");

?>
  <script>
    document.location.href = 'tampil.php';
  </script>


<?php


}
?>