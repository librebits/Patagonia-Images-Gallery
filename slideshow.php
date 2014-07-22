<!DOCTYPE html>
<html lang="en"><head>
<!--- here goes meta.php -->
<?php include "components/php/meta.php"; ?>

    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Patagonia Images |   Slideshow   </title>

    <!-- Bootstrap core CSS -->
    <link href="grid-template_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="grid-template_files/grid.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="grid-template_files/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="grid-template_files/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background-size: cover;
        background-repeat:no-repeatdisplay: compact;
      }

      body#slideshow {
        background-color: #4e9258;
      }


      div#content {
      

        color: #D6D6D6;
        width: 100%;
        margin: 0 auto;
        padding: 10px;
        background-color: #f8f8f8;
        background-color: rgba(50, 50, 50,.6);

        border: 1px solid #999;
        padding: 10px;
        border-radius: 15px;
        -border-radius: 3px;
        -webkit-border-radius: 10px;
        box-shadow: 5px 5px 10px #999;

      }

    </style>

<!-- ++ as per Blueimp-Gallery -->

    <link rel="stylesheet" href="css/blueimp-gallery.min.css">

  </head>

  <body id="slideshow">

	<!-- { navbar-->
	<?php include "components/php/navbar.php"; ?>
	    <section class="container">
	      
	      <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

 <!--++  here goes links gallery. -->

 <!-- here goes comp. ? -->

<br>
<h2>Carousel image gallery</h2>
<!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
<div id="blueimp-image-carousel" class="blueimp-gallery blueimp-gallery-carousel">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="play-pause"></a>
</div>
<br>

<div id="links">

    <a href="http://placehold.it/500x333/333" title="Amaneceres y Atardeceres" data-gallery>
      <img src="http://placehold.it/250x167/333" alt="Amaneceres y Atardeceres">
    </a>

    <a href="http://placehold.it/500x333" title="Artesanos y Oficios" data-gallery>
      <img src="http://placehold.it/250x167" alt="Artesanos y Oficios">
    </a>

    <a  href="http://placehold.it/500x333/eee" title="Maracuya" data-gallery>
      <img src="http://placehold.it/250x167/eee" alt="Maracuya">
    </a>

    <a href="http://placehold.it/500x333/fff" title="Banana" data-gallery>
      <img src="http://placehold.it/250x167/fff" alt="BAnana">
    </a>
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>

    <script src="js/blueimp-gallery.min.js"></script>


    <footer> <!-- /container -->
	      <?php include "components/php/footer.php"; ?>
    </footer> <!-- /container -->
