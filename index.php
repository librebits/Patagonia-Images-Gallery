<!DOCTYPE html>
<html lang="en"><head>
<!--- here goes meta.php -->
<?php include "components/php/meta.php"; ?>

    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Patagonia Images |   Home   </title>

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

<!-- ++ Blueimp-g. <- galleryGen -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/blueimp-gallery.css">
<link rel="stylesheet" href="css/blueimp-gallery-indicator.css">
<link rel="stylesheet" href="css/blueimp-gallery-video.css">
<link rel="stylesheet" href="css/demo.css">
    

  </head>

  <body id="home">

	<!-- { navbar-->
	<?php include "components/php/navbar.php"; ?>
	    <section class="container">

<h2>Carousel image gallery</h2>
<!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
<div id="blueimp-image-carousel" class="blueimp-gallery blueimp-gallery-carousel">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<h2>Lightbox image gallery</h2>
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

<!-- ++ img galleryGen, The container for the list of example images -->
    <div id='links'>
      <a href='./img/10.jpg' title='10.jpg'>
        <img src='./img/thumbs/10.jpg' alt='10.jpg'>
      </a>
      <a href='./img/11.jpg' title='11.jpg'>
        <img src='./img/thumbs/11.jpg' alt='11.jpg'>
      </a>
      <a href='./img/12.jpg' title='12.jpg'>
        <img src='./img/thumbs/12.jpg' alt='12.jpg'>
      </a>
      <a href='./img/13.jpg' title='13.jpg'>
        <img src='./img/thumbs/13.jpg' alt='13.jpg'>
      </a>
      <a href='./img/14.jpg' title='14.jpg'>
        <img src='./img/thumbs/14.jpg' alt='14.jpg'>
      </a>
      <a href='./img/15.jpg' title='15.jpg'>
        <img src='./img/thumbs/15.jpg' alt='15.jpg'>
      </a>
      <a href='./img/16.jpg' title='16.jpg'>
        <img src='./img/thumbs/16.jpg' alt='16.jpg'>
      </a>
      <a href='./img/17.jpg' title='17.jpg'>
        <img src='./img/thumbs/17.jpg' alt='17.jpg'>
      </a>
      <a href='./img/18.jpg' title='18.jpg'>
        <img src='./img/thumbs/18.jpg' alt='18.jpg'>
      </a>
      <a href='./img/1.jpg' title='1.jpg'>
        <img src='./img/thumbs/1.jpg' alt='1.jpg'>
      </a>
      <a href='./img/2.jpg' title='2.jpg'>
        <img src='./img/thumbs/2.jpg' alt='2.jpg'>
      </a>
      <a href='./img/3.jpg' title='3.jpg'>
        <img src='./img/thumbs/3.jpg' alt='3.jpg'>
      </a>
      <a href='./img/4.jpg' title='4.jpg'>
        <img src='./img/thumbs/4.jpg' alt='4.jpg'>
      </a>
      <a href='./img/5.jpg' title='5.jpg'>
        <img src='./img/thumbs/5.jpg' alt='5.jpg'>
      </a>
      <a href='./img/6.jpg' title='6.jpg'>
        <img src='./img/thumbs/6.jpg' alt='6.jpg'>
      </a>
      <a href='./img/7.jpg' title='7.jpg'>
        <img src='./img/thumbs/7.jpg' alt='7.jpg'>
      </a>
      <a href='./img/8.jpg' title='8.jpg'>
        <img src='./img/thumbs/8.jpg' alt='8.jpg'>
      </a>
      <a href='./img/9.jpg' title='9.jpg'>
        <img src='./img/thumbs/9.jpg' alt='9.jpg'>
      </a>
    </div>


<script src="js/blueimp-helper.js"></script>
<script src="js/blueimp-gallery.js"></script>
<script src="js/blueimp-gallery-fullscreen.js"></script>
<script src="js/blueimp-gallery-indicator.js"></script>
<script src="js/blueimp-gallery-video.js"></script>
<script src="js/blueimp-gallery-vimeo.js"></script>
<script src="js/blueimp-gallery-youtube.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!-- <script src="js/jquery.blueimp-gallery.js"></script> -->
<script>
blueimp.Gallery(
    document.getElementById('links').getElementsByTagName('a'),
    {
        container: '#blueimp-image-carousel',
        carousel: true
    }
);
</script>

<script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>

<footer> <!-- /container -->
  <?php include "components/php/footer.php"; ?>
</footer> <!-- /container -->
