<!DOCTYPE html>
<html lang="en"><head>
<!--- here goes meta.php -->
<?php include "components/php/meta.php"; ?>

    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Patagonia Images |   Misión   </title>

    <!-- Bootstrap core CSS -->
    <link href="grid-template_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="grid-template_files/grid.css" rel="stylesheet">

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

      body#home {
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

<!-- ++ as per Bootstrap-Images-Gallery -->

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    <link rel="stylesheet" href="css/style.css">
    

  </head>

  <body id="home">

	<!-- { navbar-->
	<?php include "components/php/navbar.php"; ?>
	    <section class="container">
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

 <!--++  here goes links gallery. -->

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

    <a href="http://placehold.it/500x333/aaa" title="Melon" data-gallery>
	<img src="http://placehold.it/250x167/aaa" alt="Melon">
    </a>

    <a  href="http://placehold.it/500x333/ccc" title="Maracuya" data-gallery>
	<img src="http://placehold.it/250x167/ccc" alt="Maracuya">
    </a>

    <a href="http://placehold.it/500x333/333" title="Banana" data-gallery>
	<img src="http://placehold.it/250x167/333" alt="BAnana">
    </a>

    <a href="http://placehold.it/500x333" title="Melon" data-gallery>
	<img src="http://placehold.it/250x167" alt="Melon">
    </a>

    <a  href="http://placehold.it/500x333/eee" title="Maracuya" data-gallery>
	<img src="http://placehold.it/250x167/eee" alt="Maracuya">
    </a>

    <a href="http://placehold.it/500x333/fff" title="Banana" data-gallery>
	<img src="http://placehold.it/250x167/fff" alt="BAnana">
    </a>

    <a href="http://placehold.it/500x333/aaa" title="Melon" data-gallery>
	<img src="http://placehold.it/250x167/aaa" alt="Melon">
    </a>

    <a  href="http://placehold.it/500x333/ccc" title="Maracuya" data-gallery>
	<img src="http://placehold.it/250x167/ccc" alt="Maracuya">
    </a>


    <a href="http://placehold.it/500x333/333" title="Banana" data-gallery>
	<img src="http://placehold.it/250x167/333" alt="BAnana">
    </a>

    <a href="http://placehold.it/500x333" title="Melon" data-gallery>
	<img src="http://placehold.it/250x167" alt="Melon">
    </a>

    <a  href="http://placehold.it/500x333/eee" title="Maracuya" data-gallery>
	<img src="http://placehold.it/250x167/eee" alt="Maracuya">
    </a>

    <a href="http://placehold.it/500x333/fff" title="Banana" data-gallery>
	<img src="http://placehold.it/250x167/fff" alt="BAnana">
    </a>

    <a href="http://placehold.it/500x333/aaa" title="Melon" data-gallery>
	<img src="http://placehold.it/250x167/aaa" alt="Melon">
    </a>

    <a  href="http://placehold.it/500x333/ccc" title="Maracuya" data-gallery>
	<img src="http://placehold.it/250x167/ccc" alt="Maracuya">
    </a>

    <a href="http://placehold.it/500x333/333" title="Banana" data-gallery>
	<img src="http://placehold.it/250x167/333" alt="BAnana">
    </a>

    <a href="http://placehold.it/500x333" title="Melon" data-gallery>
	<img src="http://placehold.it/250x167" alt="Melon">
    </a>

    <a  href="http://placehold.it/500x333/eee" title="Maracuya" data-gallery>
	<img src="http://placehold.it/250x167/eee" alt="Maracuya">
    </a>

    <a href="http://placehold.it/500x333/fff" title="Banana" data-gallery>
	<img src="http://placehold.it/250x167/fff" alt="BAnana">
    </a>

</div>

 	     <!-- here goes main-content.php comp. -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>


    <footer> <!-- /container -->
	      <?php include "components/php/footer.php"; ?>
    </footer> <!-- /container -->
