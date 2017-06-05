<?php
 ob_start();
 session_start();
 ob_end_clean();
?>
<?php function head() {?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Winner</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="jquery.lightbox-0.5.css">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.innerfade.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>

<script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
</script>

<script type="text/javascript">
$(document).ready(
	function(){
		$('#slider').innerfade({
				speed: 'slow',
				timeout: 4000,
				type: 'sequence',
				containerheight: '430px'
		});
	}
);
</script>
<?php }?>

<?php function get_header() {?>
    	<div id="headerLeft">
        	<img src="images/logo.png">
        </div><!--end of headerLeft-->

        <div id="headerRight">
         <?php if(isset($_SESSION["membername"])) {?>
      		<table>
             <tr>
                <td>Welcome</td>
                 <td>&nbsp;</td>
                <td>
                <strong><?php echo $_SESSION["membername"]; ?></strong>
                &nbsp;|&nbsp;
                <a href="memberlogout.php">Log Out</a>
                </td>
               </tr>
            </table>
                <?php } else {?>
        	  <table>
            	<tr>
                	<td>Username</td>
                    <td>Password</td>
                    <td></td>
                </tr>
                <tr>
                	<form id="loginmember" name="loginmember" method="post" action="loginmembersubmit.php">
                        <td><input type="email" id="membername" name="membername" required></td>
                        <td><input type="password" id="memberpassword" name="memberpassword" required></td>
                        <td><input type="submit" id="loginmembersubmit" name="loginmembersubmit" value="Login"></td>
                    </form>
                </tr>
            </table>
 <br>
                If You not have account Please Regsiter<a href="detail.php?registermember">Here</a>
                <?php }?>

              <?php if(isset($_GET["loginerror"])) { ?>
                <br>
                <span style="color:#F00" >
                Email & Password error, please log in again..
                </span>
                <?php }?>
                <!-- end member-->
        </div><!--end of headerRight-->
<?php }?>

<?php function get_menu(){?>
    	<ul>
        	<li <?php if (isset($_GET["home"]) ) { ?>class="white borderRadiusLeft"<?php } ?>><a href="index.php?home">Home</a></li>
        	<li <?php if (isset($_GET["blog"]) ) { ?>class="white borderRadiusLeft"<?php } ?>><a href="detail.php?blog">Blogs</a></li>
        	<li <?php if (isset($_GET["news"]) ) { ?>class="white borderRadiusLeft"<?php } ?>><a href="detail.php?news">News</a></li>
        	<li <?php if (isset($_GET["gallery"]) ) { ?>class="white borderRadiusLeft"<?php } ?>><a href="detail.php?gallery">Gallery</a></li>
        	<li  <?php if (isset($_GET["contact"]) ) { ?>class="white borderRadiusRight"<?php }  else {?> class="borderRadiusRight" <?php } ?>><a href="detail.php?contact">Contact Us</a></li>
        </ul>
<?php }?>

<?php function get_slider() {?>

            <?php
					//3. Buat syntax sql
          global $koneksi;

		  			$sql="SELECT * FROM slider_tbl";
					//4. Jalankan/lakukan Perintah/syntax SQL
		  			$qslider=$koneksi->query($sql);

		  			//5. Masukan hasil query ke variable aray
		  			$rowslider=$qslider->fetch_array();
		  			//6. Check apakah hasil menjalankan perintah sql ada hasilnya?
				?>
                <?php do {?>
                <div>
        		<img src="images/<?php echo $rowslider["image"];?>" class="sliderBorder">
            </div>
            <?php }while($rowslider=$qslider->fetch_array());?>
<?php }?>

<?php function get_search(){?>
        	<form id="serachform" name="searchform" method="post" action="detail.php?searchresult">
			<input type="text" id="searchtext" name="searchtext" value="" requaired>
            <input type="submit" id="searchsubmit" name="searchsubmit" value="Search">
			</form>
<?php }?>

<?php function get_main(){?>
                	<img src="images/1page_img4.jpg">
                    <h2>Business Opportunities</h2>
                    <p>Praesent vestibulum molestie lacus. Aenean non- suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridicul- us mus. Nulla dui. Fusce feugiat malesuada odio.
                    </p>
                    <p>Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultri.
                    </p>
<?php }?>

<?php function get_list(){?>

                	<h2>Our Solutions</h2>
                	<div id="listLeft">
                    	<ul>
                        	<li><a href="#">Offering projects</a></li>
                        	<li><a href="#">Providing projects</a></li>
                        	<li><a href="#">Successful solutions</a></li>
                        	<li><a href="#">Personal solutions</a></li>
                        </ul>
                    </div><!--end of listLeft-->

                    <div id="listRight">
                    	<ul>
                        	<li><a href="#">Market solutions</a></li>
                        	<li><a href="#">Business solutions</a></li>
                        	<li><a href="#">Advisory solutions</a></li>
                        	<li><a href="#">Saving solutions</a></li>
                        </ul>
                    </div><!--end of listRight-->
<?php }?>

<?php function get_lastnews(){?>
					<?php

					?>
                    <h2>Latest News</h2>
                    <?php

                      global $koneksi;

                      $sql = "SELECT * FROM NEWS_tbl ORDER BY createdate DESC LIMIT 3";
                      $query = $koneksi->query($sql);
                      $rows = $query->fetch_array();
                      do{
                    ?>
                  <!--- Start Looping --->
                    <div class="news1">
                        <img src="images/news/<?php echo $rows['image'] ?>" width="100">
                        <h3><?php echo  indonesiadate($rows['createdate']) ?></h3>
                        <h4><?php echo $rows['title'] ?></h4>
                        <p><?php echo substr( $rows['synopsis'],0,100) ?></p>
                    </div>

                  <a href="detail.php?newsdetail&id=<?php echo $rows['id'] ?>">Read More &gt;&gt;</a>
                  <!-- End Looping -->
                  <?php }while($rows = $query->fetch_array()); ?>

<?php }?>

<?php function get_footer(){?>
    	Copyright &copy; 2012 | By BabaStudio.com
<?php }?>

<?php function get_blog(){?>


        	  <div id="blogs">
                <h2>Blogs</h2>
                <?php
                global $koneksi;
                $view =5;
                 if($page = isset($_GET["page"])){
                   $page_aktif = $_GET['page'];
                 }else{
                   $page_aktif = 1;
                 }
                 $awaldata = ($page_aktif-1) * $view;
                 $sql = "SELECT * FROM news_tbl ORDER BY createdate DESC LIMIT $awaldata,$view";
                 $query = $koneksi->query($sql);
                 $rows = $query->fetch_assoc();
                 $no = 1;
                do{
                ?>
                <div style="display: block; overflow: hidden; margin-bottom: 15px;" id="blog1">
                    <img src="images/news/<?php echo $rows['image'] ?>" width="200">
                    <h3><?php echo $rows['title'] ?></h3>
                    <h5><?php echo  indonesiadate($rows['createdate']) ?></h5>
                    <p>
                      <?php echo substr( $rows['synopsis'],0,100) ?>
                    </p>
                    <a href="detail.php?newsdetail&id=">Read More &gt;&gt;</a>
                </div>
                <?php }while($rows = $query->fetch_array()); ?>

                <br>

                <?php
                    $sqltotal = "SELECT * FROM news_tbl";
                    $qtotal = $koneksi->query($sqltotal);
                    $total_data = $qtotal->num_rows;
                    $total_page = ceil($total_data/$view);
                ?>
                <div id="paging">
                 <?php for ($i=1; $i<=$total_page ; $i++){ ?>
                   <?php if($i == $page_aktif) { ?>
                     <span class="pagelinkactive">
                       <a style="background-color:red !important;" class="pagelink" href="detail.php?blog&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                     </span>
                   <?php }else{ ?>

                       <a class="pagelink" href="detail.php?blog&page=<?php echo $i; ?>"><?php echo $i; ?></a>

                   <?php } ?>
                  <?php } ?>
                </div>
            </div><!--end of news-->

        	<div id="iklan">
                <img src="images/iklan.jpg">
            </div><!--end of bottomRight-->
<?php }?>

<?php function get_news(){?>


        	  <div id="blogs">
                <a name="newslist"></a>
                <h2>News</h2>
                <?php
                global $koneksi;
                $view =5;
                 if($page = isset($_GET["page"])){
                   $page_aktif = $_GET['page'];
                 }else{
                   $page_aktif = 1;
                 }
                 $awaldata = ($page_aktif-1) * $view;
                 $sql = "SELECT * FROM news_tbl ORDER BY createdate DESC LIMIT $awaldata,$view";
                 $query = $koneksi->query($sql);
                 $rows = $query->fetch_assoc();
                 $no = 1;
                do{
                ?>
              <!--- Start Looping Data --->
                <div class="blog1">
                   <img src="images/news/<?php echo $rows['image'] ?>" width="100">
                   <div style="display:inline-block; width:480px;">
                     <h3 style="margin-bottom:15px; color:#fff;"><?php echo $rows['title'] ?></h3>
                     <h5 style="margin-bottom:15px; color:#fff;"><?php echo indonesiadate($rows['createdate']) ?></h5>
                     <p style="color:#fff;">
                         <?php echo substr( $rows['synopsis'],0,100) ?>
                     </p>
                     <a href="detail.php?newsdetail&id=<?php echo $rows['id'] ?>">Read More &gt;&gt;</a>
                   </div>
                </div>
                <?php }while($rows = mysqli_fetch_array($query)); ?>
 			 <!--- End looping Data --->

       <?php
           $sqltotal = "SELECT * FROM news_tbl";
           $qtotal = $koneksi->query($sqltotal);
           $total_data = $qtotal->num_rows;
           $total_page = ceil($total_data/$view);
       ?>
       <div id="paging">
        <?php for ($i=1; $i<=$total_page ; $i++){ ?>
          <?php if($i == $page_aktif) { ?>
            <span class="pagelinkactive">
              <a style="background-color:red !important;" class="pagelink" href="detail.php?news&page=<?php echo $i; ?>"><?php echo $i; ?></a>
            </span>
          <?php }else{ ?>

              <a class="pagelink" href="detail.php?news&page=<?php echo $i; ?>"><?php echo $i; ?></a>

          <?php } ?>
         <?php } ?>
       </div>

	 </div>
   <div id="iklan">
         <img src="images/iklan.jpg">
     </div><!--end of bottomRight-->
            </div><!--end of news-->


<?php }?>

<?php function get_gallery() {?>
 <h2 class="galleryH2">My Gallery</h2>
        <div id="gallery">
            <ul>
            		<?php
                global $koneksi;
					//3. Buat syntax sql
		  			$sql="SELECT * FROM gallery_tbl";
					//4. Jalankan/lakukan Perintah/syntax SQL
		  			$qimages=mysqli_query($koneksi,$sql);
		  			//5. Masukan hasil query ke variable aray
		  			$rowimages=mysqli_fetch_array($qimages);
		  			//6. Check apakah hasil menjalankan perintah sql ada hasilnya?
					?>
				<?php do {?>
                <li>
                    <a href="images/gallery/<?php echo $rowimages["image"];?>">
                        <img src="images/gallery/<?php echo $rowimages["image"];?>" width="120" height="160">
                    </a>
                </li>
 				<?php }while($rowimages=mysqli_fetch_array($qimages));?>
            </ul>
    	</div><!--end of gallery-->
<?php }?>

<?php function get_contact(){?>
    <?php
      global $koneksi;
      // if($_POST['submit'] == "Send"){
      //   $name = $_POST['name'];
      //   $email = $_POST['email'];
      //   $phone = $_POST['phone'];
      //   $msg = $_POST['msg'];
      //   $subject = $_POST['subject'];
      //   $sql = "INSERT INTO "
      // }

    ?>
        <div id="contact">
        	<div id="contactLeft">
                <h2>How to contact us ?</h2>
                <form action="#" method="post" name="Contact">
                    <table width="400px" border="0" cellspacing="9" cellpadding="10">
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><input type="text" nama="name" style="width:250px" class="text" /></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><input type="text" nama="email" style="width:250px" class="text" /></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>:</td>
                            <td><input type="text" nama="phone" style="width:250px" class="text" /></td>
                        </tr>
                        <tr>
                            <td>Subject</td>
                            <td>:</td>
                            <td><input type="text" nama="subject" style="width:250px" class="text" /></td>
                        </tr>
                        <tr>
                            <td>Mesage</td>
                            <td>:</td>
                            <td><textarea name="msg" cols="30" style="width:270px; height:100px;"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name"submit" value="Send" class="solid" /></td>
                        </tr>
                    </table>
                </form><br><br>
                <p>Just simply fill out this form and our team will get in touch with you as soon as possible.</p>
                <h3 style="margin-top:15px; color:#666;">Babastudio.com</h3>
                <p>Silicon Valley</p>
                <p>Jakarta Pusat, 10120</p>
                <p>T: +62 21 888888-9</p>
                <p>F: +62 21 9999999</p>
                <p>email: <a href="#">babastudio@babastudio.com</a></p>
        	</div><!--end of contactLeft-->
            <div id="contactRight">
            	<h2>Map</h2>
            	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.id/maps?oe=utf-8&amp;client=firefox-a&amp;ie=UTF8&amp;q=babastudio&amp;fb=1&amp;gl=id&amp;hq=babastudio&amp;hnear=0x2e69f3e945e34b9d:0x5371bf0fdad786a2,Jakarta&amp;hl=id&amp;view=map&amp;cid=7428476608744268801&amp;ll=-6.166846,106.765573&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.id/maps?oe=utf-8&amp;client=firefox-a&amp;ie=UTF8&amp;q=babastudio&amp;fb=1&amp;gl=id&amp;hq=babastudio&amp;hnear=0x2e69f3e945e34b9d:0x5371bf0fdad786a2,Jakarta&amp;hl=id&amp;view=map&amp;cid=7428476608744268801&amp;ll=-6.166846,106.765573&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>
            	<h2>Follow Us On:</h2>
                <a href="#"><img src="images/fb.png"></a>
                <a href="#"><img src="images/twitter.png"></a>
                <a href="#"><img src="images/picasa.png"></a>
          </div>
		</div><!--end of contact-->

<?php }?>

<?php function get_newsdetail ($id = ""){ ?>
  <?php
  global $koneksi;
  $id = $_GET['id'];
  $sql = "SELECT * FROM news_tbl WHERE id = $id";
  $query = mysqli_query($koneksi,$sql);
  $rows = mysqli_fetch_array($query);

  ?>
    <a name="newsdetail"></a>
	<h2 style="margin-bottom:10px;" class="newsdate"> <?php echo indonesiadate($rows['createdate'])  ?> </h2>

	<h3 style="margin-bottom:10px;" class="newstitle"> <?php echo $rows['title'] ?> </h3>

    <p style="width:800px;" class="newsdetail">
    	<img src="images/news/<?php echo $rows['image'] ?>" width="300"><?php echo $rows['synopsis'] ?>
    </p>
    <br>


<?php }?>

<?php function get_searchresult () { ?>

     <h2>Search Result Of </h2>
     <br>
	<br>
          <?php
            global $koneksi;
            if($_POST['searchsubmit'] == "Search"){
              $search = $_POST['searchtext'];
              $sql = "SELECT * FROM news_tbl WHERE title LIKE '%$search%' ORDER BY createdate DESC";
              $query = mysqli_query($koneksi,$sql);
              $rows = mysqli_fetch_array($query);
            }
            do{
          ?>

            <!--start looping--->
            <div style="overflow:hidden;" class="newsitem">
             <h2 class="newsdate"><?php echo indonesiadate($rows['createdate']) ?></h2>
             <h3 class="newstitle"><?php echo $rows['title'] ?></h3><br>
             <p class="newsparagraf">
               <img src="images/news/<?php echo $rows['image'] ?>" /><?php echo substr($rows['synopsis'],0,100) ?>
             </p>
             <a href="detail.php?newsdetail&id=<?php echo $rows['id'] ?>">Read More &gt;&gt;</a>
            </div>
            <!--End Looping-->
            <?php }while($rows = mysqli_fetch_array($query)) ?>

<?php }?>

<?php function get_newscomments($newsid) {?>
	<h2>Comments</h2>
    <br>

        <!--Start Looping Data -->
        <div class="newsitem">
            <h2 class="newsdate">
            	Tanggal
            </h2>
            <h3 class="newstitle">
            Pengirim : Pengirimnya Siapa ?
            </h3>
            <p class="newsparagraf">
            	Comment :Commentnya apa ding
            </p>
        </div>
        <!--End Looping Data -->

<?php }?>

<?php function get_newscommentform($newsid) { ?>
	<p>
    Write Comment Here
    </p>
    <script type="text/javascript" language="javascript">
    function checkbeforesubmit() {
		//untuk membuart variable dalam java script
		//Dimana variable form untuk menampung informasi
		//tentang Tag form comentform
		var theform;
		theform=document.getElementById("commentform");

		var yourcomment;
		yourcomment=theform.comment.value;

		if (yourcomment=="" || yourcomment.length==0) {
			alert("Please insert Your Comment");
			theform.comment.focus();
			return false;
			}
			// Jika tidak ada masalah form melakukan submit
			theform.submit();
			return true;
		}
    </script>
    <form id="commentform" name="commentform" method="post" action="detail.php?commentsubmit" onsubmit="return checkbeforesubmit();">
    <table width="500" cellspacing="5" cellpadding="3" border="0">
    	<tr>
        	<td width="100"><strong>Email</strong></td>
            <td width="5">:</td>
            <td width="395">
            	<?php echo $_SESSION["membername"]; ?>
                <input type="hidden" id="newsid" name="newsid" value="<?php echo $newsid;?>"/>
            </td>
        </tr>
        <tr>
        	<td width="100" valign="top"><strong>Your Comments</strong></td>
            <td width="5" valign="top">:</td>
            <td width="395">
            <textarea id="comment" name="comment" class="commenttextarea" placeholder="Please insert your comment" required="required"></textarea>
            </td>
        </tr>
            <tr>
        	<td width="100">&nbsp;</td>
            <td width="5">&nbsp;</td>
            <td width="395">
           		<input type="submit" id="commentsubmit" name="commentsubmit" value="send" class="commentsubmitbutton" />
            </td>
        </tr>
    </table>
    </form>
<?php } ?>

<?php function get_commentsubmit() {
	//1. connect ke Database

	//2. Pilih Database

	//3.Tampung hasil masukan Form
	$sender=$_SESSION["membername"]; // setelah login
	$newsid=$_POST["newsid"];
	$comment=$_POST["comment"];
	//4. Buat Perintah SQL
	$sql="INSERT INTO newscomment_tbl(sender,newsid,comment,createdate) VALUES ('$sender',$newsid,'$comment',now())";
	//echo $sql;
	//5. Jalankan Perintah SQL
	mysql_query($sql,$GLOBALS["koneksi"]);

	//6. Kembali ke News yang bersangkutan
	echo"<script language='javascript'>";
	echo "window.location.href='detail.php?newsdetail&id=$newsid#newsdetail';";
	echo"</script>";
}
?>

<?php function get_registerform() {?>
 <h2>Register Member</h2>
 <br>
 <form id="registerform" name="registerform" method="post" action="detail.php?registersubmit">
 <table width="500" border="0" cellpadding="3" cellspacing="5">
    <tr>
    	<td>You Email</td>
        <td>:</td>
        <td>
        	<input type="email" id="membername" name="membername" value="" class="commenttextfield" required placeholder="Please fil your email"/>
        </td>
    </tr>
    <tr>
    	<td>You Password</td>
        <td>:</td>
        <td>
        	<input type="password" id="memberpassword" name="memberpassword" value="" class="commenttextfield" required placeholder="Please fill your password"/>
        </td>
    </tr>
    <tr>
    	<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
        	<input type="submit" id="registersubmit" name="registersubmit" value="register" class="commenttextfield"/>
        </td>
    </tr>

 </table>
 </form>
<?php }?>

<?php
 function get_registersubmit() {
	 //1. koneksi ke data base
   global $koneksi;
	 //2. {ilih data base


	 //3. tamopun hasil masukan form
	 $membername=$_POST["membername"];
	 $memberpassword=md5($_POST["memberpassword"]);
	 //4. Buat syntax SQL
	 $sql="INSERT INTO member_tbl(membername,memberpassword,createdate) VALUES ('$membername','$memberpassword',now()) ";
   $query = $koneksi->query($sql);
   if($query){
     $_SESSION["membername"]=$membername;
   }
	 //5. Jalankan Perintah SQL
	 //mysqli_query($koneksi,$sql);

	//6. Kembali ke index.php
	echo "<script language='javascript'>";	 	echo "window.location.href='index.php';";
	echo "</script>>";
	 }
?>
