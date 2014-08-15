<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PocketBukkit is a free, open source server software for Minecraft: Pocket Edition written in Java.  It has a built-in API to allow you to customize your server in any way you can imagine.">
    <title>PocketBukkit | Downloads</title>
    <link href="css/channels.css" rel="stylesheet">
<?php include_once( 'includes/meta.php'); ?>
</head>

<body><font color="white">
<?php include_once( 'includes/nav.php'); ?>
    <!-- Masthead -->
    <div class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><img src="img/logo.png" height="80" width="80"></img> PocketBukkit</h1>
                    <h3></h3>
                    <font size="4"><p>Your Server.  Your Way.</p></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro home page content -->
    <div class="intro-marketing">
        <div class="container">
            <div class="row">
                <div class="col-lg-40 col-md-40 intro-marketing-box">
                  <?php
                    if(isset($_GET['next']) == true && empty($_GET['next']) == true) {
                  ?>
                      <center><p class="alert alert-info">You are trying to download a build that is not ready yet!</p></center>
                  <?php
                    }elseif(isset($_GET['error']) == true && empty($_GET['error']) == true) {
                  ?>
                      <center><p class="alert alert-danger">There is not a build available in that channel at this time!</p></center>
                  <?php
                    }elseif(isset($_GET['warning']) == true && empty($_GET['warning']) == true) {
                  ?>
                      <center><p class="alert alert-warning">The build you requested is not yet available to the public!</p></center>
                  <?php
                    }
                  ?>
                  <center>
                    <u><h2>Download PocketBukkit</h2></u>
                    <table class="versionsTable" style="text-indent: 5em;">
                      <thead>
                        <tr>
                          <th>Build number</th>
                          <th>MC Version</th>
                          <th><center>Type</center></th>
                          <th>Download</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <tr class="chan-next">
                          <th><center>#0002</center></th>
                          <td><center>v0.9.5 alpha</center></td>
                          <td><center><a href="development.php" style="color: #CC0000">Development</a></center></td>
                          <td class="downloadLink">
                            <a class="tooltipd" title="Download PocketBukket (#0002)" href="downloads.php?next">
                              <center>
                                <img src="img/download.png" alt="Download" width="30" height="30">
                              </center>
                            </a>
                          </td>
                        </tr>
                        
                        <tr class="chan-dev">
                          <th><center>#0001</center></th>
                          <td><center>v0.9.5 alpha</center></td>
                          <td><center><a href="development.php" style="color: #CC0000">Development</a></center></td>
                          <td class="downloadLink">
                            <a class="tooltipd" title="Download PocketBukket (#0001)" href="download/0001/PocketBukkit.jar">
                              <center>
                                <img src="img/download.png" alt="Download" width="30" height="30">
                              </center>
                            </a>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                    <u><h2>Quick Download</h2></u></br>
                    <a href="downloads.php?error" class="btn btn-large btn-success">Stable</a> 
                    <a href="downloads.php?error" class="btn btn-large btn-warning">Beta</a>
                    <a href="http://pocketbukkit.net/download/0001/PocketBukkit.jar" class="btn btn-large btn-danger">Development</a>
                  </center></br></br>
                </div>
              <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- Page content -->
<?php include_once( 'includes/js.php'); ?>
</font>
</body>
</html>
