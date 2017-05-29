<?php
	//Aktifkan session
	ob_start();
	session_start();
	ob_end_clean();

	include("/config/config.php");
	//1.koneksi ke server database


	//2.Pilih database

	global $koneksi;
	//3.Tampung hasil input dari form
	$membername=$_POST["membername"];
	$memberpassword=md5($_POST["memberpassword"]);

	//4. Buat perintah SQL
	$sql="SELECT * FROM member_tbl WHERE membername='$membername' AND memberpassword='$memberpassword'";
	//echo $sql;
	//5. Jalankan perintah SQL
	$qlogin=mysqli_query($koneksi,$sql);

	//6. Masukan hasil query ke variable array
	$rowlogin=mysqli_fetch_array($qlogin);

	//7. check apakah hasil menjalankan perintah SQL ada hasilnya?

	if(!empty($rowlogin)) {
		//jika ada
		//Buat variable session
		$_SESSION["membername"]=$membername;
		//kembali ke index.php
		header("location:index.php");
	}
	else {
		//jika tidak ada
		header("location:index.php?loginerror");

	}
?>
