<?php
  ob_start();
  session_start();
  ob_clean();

  include("../config/config.php");

  global $koneksi;
  //3.Tampung hasil input dari form
  $membername=$_POST["username"];
  $memberpassword=md5($_POST["userpassword"]);

  //4. Buat perintah SQL
  $sql="SELECT * FROM user_tbl WHERE username='$membername' AND userpassword='$memberpassword'";
  //echo $sql;
  //5. Jalankan perintah SQL
  $qlogin=mysqli_query($koneksi,$sql);

  //6. Masukan hasil query ke variable array
  $rowlogin=mysqli_fetch_array($qlogin);

  //7. check apakah hasil menjalankan perintah SQL ada hasilnya?

  if(!empty($rowlogin)) {
    //jika ada
    //Buat variable session
    $_SESSION["admin"]=$membername;
    //kembali ke index.php
    header("location:admin.php");
  }
  else {
    //jika tidak ada
    header("location:index.php?loginerror");

  }



?>
