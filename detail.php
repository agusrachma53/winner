<?php

    include("/config/config.php");
	include("/function/function.php");
	include("/function/utility.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<?php head();?>
</head>

<body>

<div id="wrapper">

	<div id="header">
    <?php get_header();?>
    </div><!--end of header-->

	<div id="menu">
    <?php get_menu();?>
	<??>
    </div><!--end of menu-->

	<div id="content">

    	<div id="slider">
  		<?php get_slider();?>
        </div><!--end of slider-->
        	<img src="images/sliderbox_bg.png" class="shadow">

    	<div id="search">
        <?php get_search();?>
        </div><!--end of search-->

    	<div id="contentBottom">

        	<?php
			if(isset($_GET["blog"])) {
			//jika ada , panggil function get_blog()
			get_blog();
			}
			else if (isset($_GET["news"])){
			get_news();
			}
			else if (isset($_GET["gallery"])){
			get_gallery();
			}
			else if (isset($_GET["contact"])){
			get_contact();
			}
			else if (isset($_GET["newsdetail"])){
			get_newsdetail();
			}
			else if (isset($_GET["searchresult"])) {
			get_searchresult();
			}
			else if (isset($_GET["commentsubmit"])) {
			get_commentsubmit();
			}
			else if (isset($_GET["registermember"])) {
			get_registerform();
			}
			else if (isset($_GET["registersubmit"])) {
			get_registersubmit();
      echo "bisa";
			}
			?>

        </div><!--end of contentBottom-->
    </div><!--end of content-->

	<div id="footer">
       <?php get_footer();?>
    </div><!--end of footer-->

</div><!--end of wrapper-->

</body>
</html>
