<?php  function head() { ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CMS Web Corporate</title>
<link rel="stylesheet" type="text/css" href="../style/adminstyle.css" />
<?php } ?>

<?php function get_header() { ?>
  <h1>CMS Winner</h1>
  <h2>Content Management System Winner</h2>
<?php } ?>

<?php function get_menu() { ?>
  <ul>
          <li><a href="admin.php?news">News</a></li>
          <li><a href="admin.php?blogs">Blogs</a></li>
          <li><a href="admin.php?member">Member</a></li>
          <li><a href="admin.php?comments">Comments</a></li>
        </ul>
<?php } ?>

<?php function get_news() { ?>
   <h2>News</h2>
     <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="6%" class="tableheader">Id</td>
            <td width="16%" class="tableheader">Date</td>
            <td width="25%" class="tableheader">Image</td>
            <td width="15%" class="tableheader">Title</td>
            <td width="31%" class="tableheader">Sinopsis</td>
            <td width="7%" class="tableheader">&nbsp;</td>
          </tr>

          <?php
          global $koneksi;
          $halaman = 10;
           $page = isset($_GET["halaman"]);
           if($page == "" || $page != ""){
             $page = 1;
           }
           $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
           $result = mysqli_query($koneksi,"SELECT * FROM news_tbl");
           $total = mysqli_num_rows($result);
           $pages = ceil($total/$halaman);
           $query = mysqli_query($koneksi,"SELECT * FROM news_tbl ORDER BY createdate DESC LIMIT $mulai, $halaman")or die(mysql_error);
           $rows = mysqli_fetch_array($query);
           $no = 1;
          do{
          ?>

              <tr>
                <td class="tablevalue"><?php echo $no; ?></td>
                <td class="tablevalue"><?php echo indonesiadate($rows['createdate']) ?></td>
                <td class="tablevalue">
                 <img src="../images/news/<?php echo $rows['image'] ?>" width="100">
                </td>
                <td class="tablevalue"><?php  echo $rows['title']  ?></td>
                <td class="tablevalue"><?php  echo substr($rows['synopsis'],0,100)   ?></td>
                <td class="tablevalueright">
               <a href="admin.php?newseditform&id=<?php  echo $rows['id']  ?>">
                <img src="../asset/b_edit.png" />               </a>
                &nbsp;&nbsp;
                <a onclick="javascript: return confirm('Are you sure to delete this ?');" href="admin.php?newsdelete&id=<?php  echo $rows['id']  ?>">
                <img src="../asset/b_drop.png" />
                </a>
                </td>
              </tr>
              <?php $no++; }while($rows = mysqli_fetch_array($query)); ?>
        <!--- Jika Kosong --->

        </table>
         <br />
         <a href="admin.php?newsadd">+&nbsp;Add</a>
<?php } ?>

<?php function get_blogs() { ?>
   <h2>Blogs</h2>
     <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="6%" class="tableheader">Id</td>
            <td width="16%" class="tableheader">Date</td>
            <td width="25%" class="tableheader">Image</td>
            <td width="15%" class="tableheader">Title</td>
            <td width="31%" class="tableheader">Sinopsis</td>
            <td width="7%" class="tableheader">&nbsp;</td>
          </tr>
          <tr>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalueright">
            <img src="../asset/b_edit.png" />            &nbsp;&nbsp;
            <img src="../asset/b_drop.png" />
            </td>
          </tr>
        </table>
         <br />
         <a href="admin.php?newsadd">+&nbsp;Add</a>
<?php } ?>



<?php function get_member() { ?>
   <h2>Member</h2>
     <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="6%" class="tableheader">Id</td>
            <td width="16%" class="tableheader">Date</td>
            <td width="15%" class="tableheader">Title</td>
            <td width="31%" class="tableheader">Sinopsis</td>
            <td width="7%" class="tableheader">&nbsp;</td>
          </tr>
          <?php
          global $koneksi;
          $halaman = 4;
           $page = isset($_GET["halaman"]);
           if($page == "" || $page != ""){
             $page = 1;
           }
           $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
           $result = mysqli_query($koneksi,"SELECT * FROM member_tbl");
           $total = mysqli_num_rows($result);
           $pages = ceil($total/$halaman);
           $query = mysqli_query($koneksi,"select * from member_tbl LIMIT $mulai, $halaman")or die(mysql_error);
           $rows = mysqli_fetch_array($query);
           $no = 1;
          do{
          ?>

              <tr>
                <td class="tablevalue"><?php echo $no; ?></td>
                <td class="tablevalue"><?php echo indonesiadate($rows['createdate']) ?></td>
                <td class="tablevalue"><?php  echo $rows['membername']  ?></td>
                <td class="tablevalue"><?php  echo substr($rows['memberdesc'],0,100)   ?></td>
                <td class="tablevalueright">
               <a href="admin.php?newseditform&id=<?php  echo $rows['id']  ?>">
                <img src="../asset/b_edit.png" />               </a>
                &nbsp;&nbsp;
                <a onclick="javascript: return confirm('Are you sure to delete this ?');" href="admin.php?newsdelete&id=<?php  echo $rows['id']  ?>">
                <img src="../asset/b_drop.png" />
                </a>
                </td>
              </tr>
              <?php $no++; }while($rows = mysqli_fetch_array($query)); ?>
        </table>
         <br />
         <a href="admin.php?newsadd">+&nbsp;Add</a>
<?php } ?>

<?php function get_footer() { ?>
 Copyrights &copy; 2011 Baba Studio
<?php } ?>

<?php function get_newsaddform() { ?>
   <h2>News</h2>
   <br />

   <form id="frmnewsadd" name="frmnewsadd" action="admin.php?newsaddsubmit" method="post" enctype="multipart/form-data">
      <table width="500">
        <tr>
          <td>Title</td>
          <td>:</td>
          <td>
           <input type="text" size="40" name="title" id="title" value="" required />
          </td>
        </tr>
        <tr>
          <td>Date</td>
          <td>:</td>
          <td>

           <select id="day" name="day">
             <option value="">Day</option>
             <?php for ($day=1;$day<=31;$day++) { ?>
               <?php
			     // check apakah variable $day = Hari tanggal hari ini
			     if ($day==get_currentsingledate("day")) {
					 $selected="selected='selected'";
				 }
				 else {
					 $selected="";
				 }
			   ?>
              <option value="<?php echo $day; ?>" <?php echo $selected; ?> >
                <?php echo $day; ?>
              </option>
             <?php } ?>
           </select>
           &nbsp;
           <select id="month" name="month">
             <option value="">Month</option>
             <?php for ($month=1;$month<=12;$month++) { ?>
              <?php
			    //Check apakah variable month sama dengan Bulan hri ini
				if ($month==get_currentsingledate("month")) {
					$selected="selected='selected'";
				}
				else {
					$selected="";
				}
			  ?>
              <option value="" <?php echo $selected; ?>>
               <?php echo get_namabulan($month); ?>
              </option>
             <?php } ?>
           </select>
           &nbsp;
           <select id="year" name="year">
             <option value="">Year</option>

             <?php for ($year=2012;$year>=1905;$year--) { ?>
              <?php
			    if ($year==get_currentsingledate("year")) {
					$selected="selected='selected'";
				}
				else {
				   $selected="";
				}
			  ?>
             <option value="" <?php echo $selected; ?>>
               <?php echo $year; ?>
             </option>
             <?php } ?>
           </select>
           &nbsp;&nbsp;
           <input type="text" size="5" name="hour" id="hour" value="<?php echo get_currentsingledate("hours"); ?>" />
           &nbsp;:&nbsp;
           <input type="text" size="5" name="minutes" id="minutes" value="<?php  echo get_currentsingledate("minutes"); ?>" />
          </td>
        </tr>
        <tr>
          <td>Image</td>
          <td>:</td>
          <td>
           <input type="file" size="40" name="image" id="image" value="" required="required" />
          </td>
        </tr>
        <tr>
          <td>Sinopsis</td>
          <td>:</td>
          <td>
           <textarea id="synopsis" name="synopsis" cols="40" rows="8" required></textarea>
          </td>
        </tr>
        <tr>
          <td>Detail</td>
          <td>:</td>
          <td>
           <textarea id="detail" name="detail" cols="40" rows="8" required></textarea>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>
           <input type="submit" id="newssubmit" name="newssubmit" value="INSERT" />
          </td>
        </tr>

      </table>
   </form>
<?php } ?>

<?php
 function get_newsaddsubmit() {
   $base_url = "http://localhost/winner/";
  global $koneksi;
  if($_POST['newssubmit'] == "INSERT"){
  $title = $_POST['title'];
  $date = date('Y-m-d h:i:m');
  $synopsis = $_POST['synopsis'];
  $detail = $_POST['detail'];
  //$oldimage = $_POST['oldimage'];
  $image = $_FILES['image']['name'];
  $imagetmp = $_FILES['image']['tmp_name'];
  $directory = "../images/news/";
  if($image != ""){
    //unlink($directory . $oldimage);
    $bisa = move_uploaded_file($imagetmp, $directory . $image);
    $sql = "INSERT INTO news_tbl (title,image,synopsis,detail,createdate) VALUES('$title','$image','$synopsis','$detail','$date')";

  }else{
    echo "gagal 2";
  }
  $query = mysqli_query($koneksi,$sql);
  }



   //6. Kembali ke admin.php
   gotopage("admin.php?news");


 }
?>

<?php
 function get_newsdelete() {
   global $koneksi;
   $id = $_GET['id'];
   $sql = "SELECT image FROM news_tbl WHERE id = $id";
   $query = mysqli_query($koneksi,$sql);
   $rows = mysqli_fetch_array($query);
   if($rows > 0){
     $sql = "DELETE  FROM news_tbl WHERE id = $id";
     $querynya = mysqli_query($koneksi,$sql);
     if($querynya){
       echo "bisa";
     }else{
       echo "enggak";
     }
   }else{
     echo "gagal";
   }

  gotopage("admin.php?news");


   //===============================================

 }
?>

<?php function get_newseditform() { ?>

   <h2>News</h2>
   <br />
   <?php
   global $koneksi;

   $id = $_GET['id'];
    $sql = "SELECT * FROM news_tbl WHERE id = $id";
    $query = mysqli_query($koneksi,$sql);
    $rows = mysqli_fetch_array($query);
    $datee = $rows['createdate'];
    //echo $datee .  " | " ;
    $year = substr($datee,0,4);
    //echo $year . " | ";
    $mounth = substr($datee,5,2);
  //  echo $mounth . " | ";
    $day = substr($datee,8,2);
    //echo $day . " | ";
    $hour = substr($datee,11,2);
    //echo $hour;
    $menute =  substr($datee,14,2);
    //echo " | " . $menute;
    $detik = substr($datee,17,2);
  //  echo  " | " .  $detik;
   ?>
   <form id="frmnewsedit" name="frmnewsedit" action="admin.php?newseditsubmit" method="post" enctype="multipart/form-data">
      <table width="500">
        <tr>
          <td>Title</td>
          <td>:</td>
          <td>
           <input type="text" size="40" name="title" id="title" value="<?php echo $rows['title'] ?>" required />
          </td>
        </tr>
        <tr>
          <td>Date</td>
          <td>:</td>
          <td>
           <select id="day" name="day" required="required">
             <option value="<?php echo $day ?>"><?php echo $day ?></option>
             <?php for ($day=1;$day<=31;$day++) { ?>
               <?php
                  if($day <= 10){
                    $nol = "0";
                  }else{
                    $nol = "";
                  }
               ?>
              <option value="<?php echo $nol . $day; ?>" required="required" >
                <?php echo $nol . $day; ?>
              </option>
             <?php } ?>
           </select>
           &nbsp;
           <select id="month" name="month" required="required">
             <option value="<?php echo $mounth ?>"><?php echo get_namabulan($mounth) ?></option>

             <?php for ($month=1;$month<=12;$month++) { ?>
               <?php
                  if($month >= 10 ){
                    $nol = "";
                  }else{
                    $nol = "0";
                  }
               ?>
              <option value="<?php echo $nol . $month; ?>">
               <?php echo get_namabulan($month); ?>
              </option>
             <?php } ?>
           </select>
           &nbsp;
           <select id="year" name="year" required="required">
             <option value="<?php echo $year ?>"><?php echo $year ?></option>

             <?php for ($year=2012;$year>=1905;$year--) { ?>

             <option value="<?php echo $year; ?>" >
               <?php echo $year; ?>
             </option>
             <?php } ?>
           </select>
           &nbsp;&nbsp;
           <?php

            ?>
           <input type="text" size="5" name="hour" id="hour" value="<?php echo $hour;  ?>" />
           &nbsp;:&nbsp;
           <input type="text" size="5" name="minutes" id="minutes" value="<?php echo $menute; ?>" />
          </td>
        </tr>
        <tr>
          <td>Image</td>
          <td>:</td>
          <td>
           <img width="200" src="../images/news/<?php echo $rows["image"]  ?>">
           <input type="hidden" id="oldimage" name="oldimage" value="<?php echo $rows['image'] ?>">
           <input type="file" size="40" name="image" id="image" value="" />
          </td>
        </tr>
        <tr>
          <td>Sinopsis</td>
          <td>:</td>
          <td>
           <textarea id="synopsis" name="synopsis" cols="40" rows="8" required><?php echo $rows['synopsis'] ?></textarea>
          </td>
        </tr>
        <tr>
          <td>Detail</td>
          <td>:</td>
          <td>
           <textarea id="detail" name="detail" cols="40" rows="8" required><?php echo $rows['detail'] ?></textarea>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>
           <input type="hidden" id="id" name="id" value="<?php echo $rows['id'] ?>">
           <input type="hidden" id="id" name="detik" value="<?php echo $detik ?>">
           <input type="submit" id="newssubmit" name="newssubmit" value="Edit" />
          </td>
        </tr>

      </table>
   </form>
<?php } ?>

<?php
 function get_newseditsubmit() {
global $koneksi;
if($_POST['newssubmit'] == "Edit"){
  $id = $_POST['id'];
  $title = $_POST['title'];
  $day = $_POST['day'];
  $month = $_POST['month'];
  $year = $_POST['year'];
  $jam = $_POST['hour'];
  $menit = $_POST['minutes'];
  $detik = $_POST['detik'];
  $date = $year . "-" . $month . "-" . $day  . " " . $jam . ":" . $menit . ":" . $detik;
  $synopsis = $_POST['synopsis'];
  $detail = $_POST['detail'];
  $oldimage = $_POST['oldimage'];
  $image = $_FILES['image']['name'];
  $imagetmp = $_FILES['image']['tmp_name'];
  $directory = "../images/news/";
  if($image != ""){
    unlink($directory . $oldimage);
    $bisa = move_uploaded_file($imagetmp, $directory . $image);
    //echo $bisa;
    $sql = "UPDATE news_tbl SET title = '$title', image = '$image', synopsis =  '$synopsis', detail = '$detail', createdate = '$date' WHERE id = '$id' ";

  }else{
    $sql = "UPDATE news_tbl SET title = '$title', image = '$oldimage', synopsis =  '$synopsis', detail = '$detail', createdate = '$date' WHERE id = '$id' ";
  }
  $query = mysqli_query($koneksi,$sql);
}
   //6. Kembali ke admin.php
   gotopage("admin.php?news");


 }
?>

<?php function get_comment() { ?>
   <h2>Comments</h2>
     <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="3%" class="tableheader">Id</td>
            <td width="16%" class="tableheader">Date</td>
            <td width="40%" class="tableheader">News</td>
            <td width="31%" class="tableheader">Comment</td>
            <td width="3%" class="tableheader">Allowed</td>
            <td width="10%" class="tableheader">&nbsp;</td>
          </tr>


              <tr>
                <td class="tablevalue"></td>
                <td class="tablevalue"></td>

                <td class="tablevalue"></td>
                <td class="tablevalue"></td>
                <td class="tablevalue">
				               </td>
                <td class="tablevalueright">
               <a href="admin.php?commentseditform&id=">
                <img src="../asset/b_edit.png" />               </a>
                &nbsp;&nbsp;
                <a onclick="javascript: return confirm('Are you sure to delete this ?');" href="admin.php?commentsdelete&id=">
                <img src="../asset/b_drop.png" />
                </a>
                </td>
              </tr>

             <!--- If Empty --->
              <tr>
                <td class="tablevalue"></td>
                <td class="tablevalue"></td>

                <td class="tablevalue"></td>
                <td class="tablevalue"></td>
                <td class="tablevalue"></td>
                <td class="tablevalueright">
               <a href="admin.php?newseditform&id=">
                <img src="../asset/b_edit.png" />               </a>
                &nbsp;&nbsp;
                <a onclick="javascript: return confirm('Are you sure to delete this ?');" href="admin.php?newsdelete&id=">
                <img src="../asset/b_drop.png" />
                </a>
                </td>
              </tr>
              <!--- If Empty --->
        </table>

<?php } ?>

<?php function get_commentseditform() { ?>


   <h2>Comments</h2>
   <br />

   <form id="frmnewsedit" name="frmnewsedit" action="admin.php?newseditsubmit" method="post" enctype="multipart/form-data">
      <table width="500">
        <tr>
          <td>Date</td>
          <td>:</td>
          <td>

          </td>
        </tr>
        <tr>
          <td>News</td>
          <td>:</td>
          <td>

          </td>
        </tr>
        <tr>
          <td>Comments</td>
          <td>:</td>
          <td>

           </td>
        </tr>
        <tr>
          <td>Allowed</td>
          <td>:</td>
          <td>
           <select id="allowed" name="allowed">
              <option value="0">0</option>
                <option value="1" selected>1</option>

           </select>
          </td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>
           <input type="hidden" id="id" name="id" value="">
           <input type="submit" id="newssubmit" name="newssubmit" value="Set Comments" />
          </td>
        </tr>

      </table>
   </form>
<?php } ?>
