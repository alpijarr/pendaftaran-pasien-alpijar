<?php include "boot.php"; ?>
<form method="post">
  <input type="text" name="search" placeholder="Cari berdasarkan nama">
  <button type="submit">Cari</button>
</form>
<table class="table">
  <thead class="table-secondary">
    <tr>
      <th>No</th>
      <th>tanggal</th>
      <th>nama</th>
      <th>alamat</th>
      <th>umur</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneks.php";

    if(isset($_POST['search'])) {
      $cari = $_POST['search'];

      $tampil = $koneks->query("SELECT * FROM input_pasien WHERE nama LIKE '%$cari%'");

    
      if($tampil->num_rows > 0) {
        $no = 0;
      
        while ($a = $tampil->fetch_array()) {
          $no++;
    ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $a['tanggal']; ?></td>
            <td><?php echo $a['nama']; ?></td>
            <td><?php echo $a['alamat']; ?></td>
            <td><?php echo $a['umur']; ?></td>
          </tr>
    <?php
        }
      } else {
        echo "<tr><td colspan='5'>Tidak ada hasil ditemukan.</td></tr>";
      }
    } else {
      $tampil = $koneks->query("SELECT * FROM input_pasien");
      $no = 0;
      while ($a = $tampil->fetch_array()) {
        $no++;
    ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $a['tanggal']; ?></td>
          <td><?php echo $a['nama']; ?></td>
          <td><?php echo $a['alamat']; ?></td>
          <td><?php echo $a['umur']; ?></td>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
</table>
