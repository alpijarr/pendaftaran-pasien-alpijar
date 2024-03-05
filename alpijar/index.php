<?php
include "boot.php" ?>

<body>
  <?php

include 'koneks.php';

?>

  <form action="" method="post">
    <form>
      <body background="logo.jpg" style="background-size:cover;">
        <div class="container col-5">
          <div class="text-center">
            <br>
            <br>
            <h1>
              <div class="badge bg- text-wrap" style="width:100% 30rem;">


                <h3>Silakan Login</h3>
              </div>
            </h1>
            </br>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">
                <div class="badge  text-wrap" style="width: 10rem;">
                  <h5>Username</h5>
                </div>
              </label>
              <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">
                <div class="badge bg- text-wrap" style="width: 10rem;">
                  <h5>Password</h5>
                </div>
              </label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" name="login" class="btn btn-primary">
              <h5>Login</h5>
            </button>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </form>

    <?php

    include "koneks.php";


    if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $kueri = "select * from tabel_login where username='$username' and password='$password'";
      $tabel_login = $koneks->query($kueri);
      $_cek = $tabel_login->num_rows;
      $tampil = $koneks->query("select * from tabel_login where username = '$username'");
      $level = $tampil->fetch_array();

      if ($_cek > 0) {
        if ($level['level'] == 'admin') {

          $_SESSION['username'] = $username;

    ?>
          <script type="text/javascript">
            document.location = 'menu.php';
          </script>
        <?php
        } elseif ($level['level'] == 'user') {
          $_SESSION['username'] = $username;
        ?>

          <script type="text/javascript">
            document.location = 'input.php';
          </script>
    <?php
        }
      } else {

        echo "gagal";
      }
    }
    ?>

</body>