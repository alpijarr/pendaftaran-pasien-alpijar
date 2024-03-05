<?php
include "boot.php";
?>
<!-- header -->
<div class="row bg-info" style="height:150px;">
  <div class="col col-5 p-3"><img src="logo3.jpg" alt="" width="130"></div>
  <div class="col text-light p-4"><b><h1>PENDAFTARAN PASIEN</h1>
  
</div>
<!-- tutup header -->

<div class="row">

<div class="col col-2 mt-2">

<ul class="list-group">
  <li class="list-group-item active" aria-current="true"><h5><div class="badge bg-info text-wrap" style="width: 11rem;">
  <h5>Menu</h5>
  </li>
  <a href="awal.php" target=""><li class="list-group-item"><h5><div class="badge bg-info text-wrap" style="width: 11rem;">
  <i class="bi bi-houses"></i>Awal
</li></a>
  <a href="input.php" target="konten"><li class="list-group-item"><h5><div class="badge bg-info text-wrap" style="width: 11rem;">
  <i class="bi bi-file-earmark-diff"></i> input
  </li></a>
<a href="tampil.php" target="konten"><li class="list-group-item"><h5><div class="badge bg-info text-wrap" style="width: 11rem;">
<i class="bi bi-printer"></i>tampil
</li></a>
<a href="rekap.php" target="konten"><li class="list-group-item"><h5><div class="badge bg-info text-wrap" style="width: 11rem;">
<i class="bi bi-printer"></i>Rekap
</li></a>
<a href="index.php" type="button"><li class="list-group-item"><h5><div class="badge bg-info text-wrap" style="width: 11rem;">
<i class="bi bi-box-arrow-left"></i>Logout
</li></a>
  <body  style=" background-image:url('logo.jpg'); background-size:cover;"> 
  

</ul>

</div>


<div class="col mt-2"> 
<iframe src="" name="konten" frameborder="0" width="100%" height="650" style="background-image:url('pixel.jpg'); background-size:cover;"></iframe>

</div>

</div>

                    <div class="modal fade" id="keluarmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">

                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Sair</h1>
                        </div>

                        <div class="modal-body">
                        Você tem certeza de que quer sair?
                        </div>

                        <div class="modal-footer">
                          <a href="logout.php" class="btn btn-danger" name="modal">Claro</a>
                          <button type="button" class="btn btn-info" data-bs-dismiss="modal" aria-label="Close">Não</button>
                        </div>
                        </div>
                      </div>
                    </div>


  <div class="col-8">
    <iframe src="" name="konten"frameborder="0" width="1000" height="900"></iframe>
    </div> 