<?php
include "boot.php";
?>

<form method="post" action="tampil.php">
  <input type="text" name="search" placeholder="Cari berdasarkan nama">
  <button type="submit">Cari</button>
</form>

<h3 class="text-center"><B>TAMPIL</B></h3>
<table class="table ">
  <thead class=" table-info">
    <tr>
      <th scope="col">no</th>
      <th scope="col">tanggal</th>
      <th scope="col">nama</th>
      <th scope="col">alamat</th>
      <th scope="col">umur</th>
      <th scope="col">poli</th>
  <tbody>
    </tr>
    </thead>
    <?php
    include "koneks.php";
    @$tampil = $koneks->query("select * from input_pasien where nama like'%$_POST[search]%' ");
    while ($a = $tampil->fetch_array()) {
      @$no++;
    ?>
  <tbody>
    <tr>
      <td><?php echo $no; ?></td>

      <td><?php echo "$a[tanggal]"; ?></td>
      <td><?php echo "$a[nama]"; ?></td>
      <td><?php echo "$a[alamat]"; ?></td>
      <td><?php echo "$a[umur]"; ?></td>
      <td><?php echo "$a[poli]"; ?></td>



      <td><a href="edit.php?id=<?php echo $a['no'] ?>"><button class="btn btn-warning text-light"><i class="bi bi-pencil-fill"></i></i></button></a></td>

      <td>
        <a href="delete.php?id=<?php echo $a['no'] ?>" onclick="return confirm('apakah anda yakin ingin menghapus?')"><button class="btn btn-warning text-light">
        <i class="bi bi-trash"></i>
      </a>
    </td>

    </tr>

  <?php
    }
  ?>

  </tr>
  </tbody>

</table>
<div class="container mt-5"></div>
<form action=" tampil.php">

  <body background="poto.jpg" alt="" width="100%">

    <from>

      </div>

      </div>
      </div>
      </table>