<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="includes/img/favicon.ico">
    <title>BeaconPE - Minecraft: Pocket Edition</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="bootstrap/css/cover.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">BeaconPE</h3>
              <ul class="nav masthead-nav">
                <li><a href="http://blockserver.org/blockserver">BlockServer</a></li>
                <li><a href="http://pocketbukkit.net/pocketbukkit">PocketBukkit</a></li>
                <li><a href="http://beaconpe.net/forums">Forums</a></li>
              </ul>
            </div>
          </div>
          <div class="inner cover">
          	<?php
          		if(isset($_GET['cancel']) && empty($_GET['cancel'])) {
          			echo '<center>
    					  	<p class="alert alert-warning">
    							Your donation has been canceled!
    						</p>
    					  </center>';
          		}
          		if(isset($_GET['success']) && empty($_GET['success'])) {
          			echo '<center>
    					  	<p class="alert alert-success">
    							Thank you for your donation!
    						</p>
    					  </center>';
          		}
          	?>
            <h1 class="cover-heading">BeaconPE</h1>
            <p class="lead">
            	BeaconPE is the merged group of BlockServer and PocketBukkit.  BlockServer is a server software for Minecraft: Pocket Edition while PocketBukkit is the API.
            </p>
            <hr>
            <h1>Support BeaconPE</h1>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="5FW2NCUAXBLGL">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Donate To BeaconPE!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Created by <a href="http://blockserver.beaconpe.net">BlockServer</a> & <a href="http://pocketbukkit.beaconpe.net">PocketBukkit</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
