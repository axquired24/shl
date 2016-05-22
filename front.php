<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Software House Lampung | Unlimited Creativity for you</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../_assets/css/bootstrap.css" rel="stylesheet">
    <link href="../_assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="cssAdd/base.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../_assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../_assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../_assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../_assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../_assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="img/shl/shlLogo_icon.png">
  </head>

  <body>
	<?php
		include("komponen/_front/navbar.php");
		include("komponen/_front/carousel.php");
	?>
    <div class="container marketing">
    <a name="contentSHL"></a>
    <?php		
		$ur = $_GET[ur];
		$boom = explode(">",$ur);
		$fd = $boom[0];
		$fl = $boom[1];
		if(!empty($ur)){
			include("komponen/".$fd."/".$fl.".php");
		}else{
			include("komponen/home/home.php");
		}
			
	?>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Software House Lampung. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- IMPORTANT | 
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../_assets/js/jquery.js"></script>
    <script src="../_assets/js/bootstrap-transition.js"></script>
    <script src="../_assets/js/bootstrap-alert.js"></script>
    <script src="../_assets/js/bootstrap-modal.js"></script>
    <script src="../_assets/js/bootstrap-dropdown.js"></script>
    <script src="../_assets/js/bootstrap-scrollspy.js"></script>
    <script src="../_assets/js/bootstrap-tab.js"></script>
    <script src="../_assets/js/bootstrap-tooltip.js"></script>
    <script src="../_assets/js/bootstrap-popover.js"></script>
    <script src="../_assets/js/bootstrap-button.js"></script>
    <script src="../_assets/js/bootstrap-collapse.js"></script>
    <script src="../_assets/js/bootstrap-carousel.js"></script>
    <script src="../_assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
	  // A-24 JQuery
    </script>
    <script src="../_assets/js/holder/holder.js"></script>
  </body>
</html>
