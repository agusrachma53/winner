<?php 
	ob_start();
	session_start();
	ob_end_clean();
	
	//menghapus sesion
	session_destroy();
	
	//kembali ke index.php
	header("location:index.php");
?>