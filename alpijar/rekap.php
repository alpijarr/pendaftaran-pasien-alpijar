<?php include "boot.php"; ?>




<form action="" method="get">

  <body background="poto.jpg" alt="" width="100%">
  <div class="row g-3 align-items-center mt-2">
    <div class="col-auto">
        <label for="inputPassword6" class="col-form-label"></label>
    </div>
    <div class="col-auto">
        <label for="inputPassword6" class="col-form-label"></label>
    </div>
    <div class="col-auto">
        <input type="date" name="akhir" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
        <form action="" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="cari data" aria-label="cari data" aria-describedby="button-addon2" name="cari">
                <button class="btn btn-primary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
    <div class="col d-grid gap-2 md-flex justify-content-md-end me-2">
        <button class="btn btn-dark" onclick="printDiv('print')" type="submit"><i class="bi bi-printer-fill"></i></button>
    </div>
</div>

</form>
</div>
</div>
<fieldset id="print">
  <table class="table class text-center bg-info-emphasis mt-2 mt-2">
    <thead>
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
      <!-- cari  -->
      <?php
      include "koneks.php";
      @$cari = $_GET['awal'];
      if ($cari == "") {


        $tampil = $koneks->query("select * from input_pasien where nama like'%$cari%' ");
        while ($a = $tampil->fetch_array()) {
          @$no++;
      ?>
    <tbody class="table">
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo "$a[tanggal]"; ?></td>
        <td><?php echo "$a[nama]"; ?></td>
        <td><?php echo "$a[alamat]"; ?></td>
        <td><?php echo "$a[umur]"; ?></td>
        <td><?php echo "$a[poli]"; ?></td>


      <?php
        }
      } else {

        $tampil = $koneks->query("select * from input_pasien where tanggal between'$_GET[awal]' and '$_GET[akhir]'");
        while ($a = $tampil->fetch_array()) {
          @$no++;
      ?>
    <tbody class="table">
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo "$a[tanggal]"; ?></td>
        <td><?php echo "$a[nama]"; ?></td>
        <td><?php echo "$a[alamat]"; ?></td>
        <td><?php echo "$a[umur]"; ?></td>
        <td><?php echo "$a[poli]"; ?></td>


    <?php
        }
      }

    ?>
      </tr>
    </tbody>
  </table>
</fieldset>

<!-- tutup cari  -->

<script type="text/javascript">
  function printDiv(el) {
    var a = document.body.innerHTML;
    var b = document.getElementById(el).innerHTML;

    document.body.innerHTML = b;
    window.print();
    document.body.innerHTML = a;
  }
</script>
</tbody>

</table>
<div class="container mt-5"></div>
<form action=" tampil.php">
  <from>

    </div>

    </div>
    </div>
    </table>