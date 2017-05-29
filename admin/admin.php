
<?php
 include("../config/config.php");
 include("../function/utility.php");
 include("../function/adminfunction.php");
?>
<!DOCTYPE HTML>
<html>
<head><?php head(); ?></head>

<body>
 <div id="adminwrapper">
     <div id="adminheader"><!--Start Admin Header -->
          <?php get_header(); ?>
     </div><!--End Admin Header -->
     <div id="adminmenu"><!--Start Admin Menu -->
         <?php get_menu(); ?>
     </div><!--End Admin Menu -->
     <div id="admincontent"><!--Start Admin Content -->
       <?php if (isset($_SESSION["username"])) { ?> 
        <div id="userlogout">
            <strong><?php echo $_SESSION["username"]; ?></strong>
            &nbsp;|&nbsp;
            <a href="logout.php">logout</a>
        </div>
       <?php } ?> 
        
		<?php
		  if (isset($_GET["news"])) {
			  get_news();
		  }
		  else if (isset($_GET["blogs"])) {
			  get_blogs();
		  }
		  else if (isset($_GET["member"])) {
			  get_member();
		  }
		  else if (isset($_GET["newsadd"])) {
			  get_newsaddform();
		  }
		  else if (isset($_GET["newsaddsubmit"])) {
			  get_newsaddsubmit();
		  }
		  else if (isset($_GET["newsdelete"])) {
			  get_newsdelete();
		  }
		  else if (isset($_GET["newseditform"])) {
			  get_newseditform();
		  }
		  else if (isset($_GET["newseditsubmit"])) {
			  get_newseditsubmit();
		  }
		  else if (isset($_GET["comments"])) {
			  get_comment();
		  }
		  else if (isset($_GET["commentseditform"])) {
			  get_commentseditform();
		  }
		  else {
			 get_news();   
		  }
		?>
     </div><!--Start Admin Content -->
     <div id="adminfooter"><!--Start Admin Footer -->
        <?php get_footer(); ?>
     </div><!--Start Admin Footer -->
   </div>
</body>
</html>