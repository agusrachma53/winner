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

        	<div id="bottomLeft">

            	<div id="main">

				<?php get_main()?>

                </div><!--end of main-->

                <div id="list">
				<?php get_list()?>
                </div><!--end of list-->

            </div><!--end of bottomLeft-->

            <div id="bottomRight">

                <div id="news">
				  <?php get_lastnews()?>

                </div>
            </div><!--end of bottomRight-->

        </div><!--end of contentBottom-->
    </div><!--end of content-->
	<div id="footer">
       <?php get_footer();?>

    </div><!--end of footer-->
</div><!--end of wrapper-->
</div>

</body>
</html>
