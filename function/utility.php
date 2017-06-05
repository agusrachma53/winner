<?php
 function indonesiadate($thedate) {
	  $hari=substr($thedate,8,2);
	  $bulan=get_namabulan(substr($thedate,5,2));
	  $tahun=substr($thedate,0,4);


	  $hour=substr($thedate,11,2);
	  $minutes=substr($thedate,14,2);
	  $second=substr($thedate,17,2);

	  $tanggal="$hari-$bulan-$tahun | $hour:$minutes:$second wib";
	  return $tanggal;
	 }
 function get_namabulan($bulan) {
	 //check bulan itu isinya apa
	 switch($bulan) {
		 //jika isinya 1 berarti bulan nama bulan adalah january
		case 1 :
		 	$namabulan="Januari";
			break;
		case 2 :
		 	$namabulan="Febuary";
			break;
		case 3 :
		 	$namabulan="Maret";
			break;
		case 4 :
		 	$namabulan="April";
			break;
		case 5 :
		 	$namabulan="Mei";
			break;
		case 6 :
		 	$namabulan="Juni";
			break;
		case 7 :
		 	$namabulan="July";
			break;
		case 8 :
		 	$namabulan="Agustus";
			break;
		case 9 :
		 	$namabulan="September";
			break;
		case 10 :
		 	$namabulan="Oktober";
			break;
		case 11 :
		 	$namabulan="November";
			break;
		case 12 :
		 	$namabulan="Desember";
			break;
		 }
		 return $namabulan;
	 }

	 function gotopage($page){
		echo "<script language='javascript'>";
		echo "window.location.href='$page';";
		echo "</script>";
		 }

	function get_currentsingledate($selection){
		date_default_timezone_set('Asia/Jakarta');
		$thedate=getdate();
		$year=$thedate["year"];
		$month=$thedate["mon"];
		$day=$thedate["mday"];
		$hours=$thedate["hours"];
		$minutes=$thedate["minutes"];
		$seconds=$thedate["seconds"];

		switch ($selection) {
			case "year" :
			return $year;
			break;

			case "month" :
			return $month;
			break;

			case "day" :
			return $day;
			break;

			case "hours" :
			return $hours;
			break;

			case "minutes" :
			return $minutes;
			break;

			case "seconds" :
			return $seconds;
			break;

		}

		}
?>
