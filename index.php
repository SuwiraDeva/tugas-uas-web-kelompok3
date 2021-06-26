<?php 
// START MEMANGGIL FILE CONFIG UNTUK MENGHUBUNGKAN KE DATABASE SERVER
require_once ("config.php");
// FINISH MEMANGGIL FILE CONFIG UNTUK MENGHUBUNGKAN KE DATABASE SERVER
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>

    <!-- CSS ASSET -->
    <link href="css/form.css" rel="stylesheet">

    <!-- JAVASCRIPT ASSET -->
    <script src="js/sweetalert2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

</head>
<body>
<!-- ALERT FLEKSIBEL YANG MENERIMA STATUS DARI FILE AKSI -->
<?php if($_GET['keterangan'] != ""){?>
<script>
alert("<?php echo $_GET['keterangan']; ?>");
</script>
<?php } ?>
 <!-- ALERT FLEKSIBEL YANG MENERIMA STATUS DARI FILE AKSI -->

<div class="container"> 
        <form action="login_aksi.php" method="post" class="login-email">
    <a href="index.php"><img src="img/teknik.jpeg" width="100%"></a>
   <p class="login-text" style="font-size: 2rem; font-weight: 800;">Sign In</p> 
   <div class="input-group"> 
    <input type="text" placeholder="Email" name="username" class="form-control" > 
               
   </div> 
   <div class="input-group"> 
    <input type="password" placeholder="Password" name="password" class="form-control"> 

   </div> 
   <div class="input-group"> 
            <input type="submit" class="btn btn-primary" value="Login"> 
   </div> 
   <p class="login-register-text">Belum Punya Akun ? <a href="register.php">Daftar Disini</a>.</p> 
  </form> 
    </div>
</body>
</html>

