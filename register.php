<?php 
// START MEMANGGIL FILE CONFIG UNTUK MENGHUBUNGKAN KE DATABASE SERVER
require_once ("config.php");
// FINISH MEMANGGIL FILE CONFIG UNTUK MENGHUBUNGKAN KE DATABASE SERVER
?> 
  
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Sign Up</title> 
    <!-- CSS ASSET -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/register.css">


    <!-- CSS ASSET -->

    <!-- JAVASCRIPT ASSET -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/font-awesome3769096239.js"></script>
    <!-- JAVASCRIPT ASSET --> 
    
</head> 
<body> 

<!-- ALERT FLEKSIBEL YANG MENERIMA STATUS DARI FILE AKSI -->
<?php if($_GET['keterangan'] != ""){?>
<script>
alert("<?php echo $_GET['keterangan']; ?>");
</script>
<?php } ?>
 <!-- ALERT FLEKSIBEL YANG MENERIMA STATUS DARI FILE AKSI -->

    <div class="wrapper"> 
    <div class="card"> 
        <h2>Sign Up</h2> 
        <p>Please fill this form to create an account.</p> 
        <form action="register_aksi.php" method="post">
        <div class="form-group"> 
                <label>Username</label> 
                <input type="text" name="username" class="form-control" value=""> 
                
            </div>  

        <div class="form-group"> 
                <label>Nama</label> 
                <input type="text" name="nama" class="form-control" value=""> 
                
            </div>  

            <div class="form-group"> 
                <label>Password</label> 
                <input type="password" name="password" class="form-control" value=""> 
                
            </div>

            <div class="form-group"> 
                <label>Confirm Password</label> 
                <input type="password" name="confirm_password" class="form-control" value=""> 
                
            </div> 

            <div class="form-group"> 
                <input type="submit" class="btn btnsub" value="Submit"> 
                <input type="reset" class="btn btnres" value="Reset"> 
            </div> 
            <p>Already have an account? <a href="index.php">Login here</a>.</p> 
        </form> 
    </div> 
    </div>     
</body> 
</html>