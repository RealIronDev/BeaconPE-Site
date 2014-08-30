<?php
	include_once 'includes/header.php';
	
	//Show Fixed Navbar
	echo '<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            			<span class="sr-only">Toggle navigation</span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	            	</button>
	            	<a class="navbar-brand">PocketBukkit</a>
	            </div>
	            <div class="navbar-collapse collapse">
	            	<ul class="nav navbar-nav">
	            		<li><a data-toggle="modal" data-target="#downloads">Downloads </a></li>
	            		<li><a data-toggle="modal" data-target="#forums">Forums </a></li>
						<li><a data-toggle="modal" data-target="#webchat">WebChat </a></li>
						<li><a data-toggle="modal" data-target="#github">GitHub </a></li>
						<li><a data-toggle="modal" data-target="#twitter">Twitter </a></li>
	            	</ul>
	            </div>
			</div>
	     </div>';
	
	//Main Site Text
	echo '<div class="container">
			<div class="jumbotron">
				<center>
					</br>
					<noscript>
						<div class="alert alert-danger">
							This site uses JavaScript to run which is not enabled on your browser!
						</div>
					</noscript>
					<h1>PocketBukkit | Server API</h1>
					<p>
						PocketBukkit is the API for the BlockServer software.  It allows you to customize your server in your own way.
					</p>
					</br>
					<hr>
					<h1>How To Use PocketBukkit</h1>
					<p>
						To use PocketBukkit, <a data-toggle="modal" data-target="#downloads">download the latest version</a> and place it in your API folder located in the same directory as BlockServer.  The BlockServer software will automatically load the files for you.  If you would like to run a vanilla Minecraft: Pocket Edition Server, leave the API folder empty.
					</p>
				</center>
			</div>
		  </div>';
	
	//Show Downloads
	echo '<div class="modal fade" id="downloads" tabindex="-1" role="dialog" aria-labelledby="downloadsLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="downloadsLabel">PocketBukkit Downloads</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								There are currently no API downloads.
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		  </div>';
	
	//Show Forums Link
	echo '<div class="modal fade" id="forums" tabindex="-1" role="dialog" aria-labelledby="forumsLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="forumsLabel">PocketBukkit Forums</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								Go to the PocketBukkit Forums?
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="http://forums.beaconpe.net">Yes</a>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</center>
					</div>
				</div>
			</div>
		  </div>';
	
	//Show WebChat
	echo '<div class="modal fade" id="webchat" tabindex="-1" role="dialog" aria-labelledby="webchatLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="webchatLabel">PocketBukkit WebChat</h4></center>
					</div>
					<div class="modal-body">
						<center><iframe src="http://webchat.freenode.net?channels=%23PocketBukkit&uio=d4" width="550" height="500"></iframe></center>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		  </div>';
	
	//Show Twitter Link
	echo '<div class="modal fade" id="twitter" tabindex="-1" role="dialog" aria-labelledby="twitterLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="twitterLabel">PocketBukkit Twitter</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								Go to the PocketBukkit Twitter page?
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="https://twitter.com/PocketBukkit">Yes</a>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</center>
					</div>
				</div>
			</div>
		  </div>';
	
	//Show GitHub Link
	echo '<div class="modal fade" id="github" tabindex="-1" role="dialog" aria-labelledby="githubLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="githubLabel">PocketBukkit GitHub</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								Go to the PocketBukkit GitHub page?
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="https://github.com/PocketBukkit">Yes</a>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</center>
					</div>
				</div>
			</div>
		  </div>';
	
	//Show Java Link
	echo '<div class="modal fade" id="java" tabindex="-1" role="dialog" aria-labelledby="javaLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="javaLabel">Java Software</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								Go to the Java Software download page?
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="http://java.com/download">Yes</a>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</center>
					</div>
				</div>
			</div>
		  </div>';
	
	//Show Oracle Link
	echo '<div class="modal fade" id="oracle" tabindex="-1" role="dialog" aria-labelledby="oracleLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<center><h4 class="modal-title" id="oracleLabel">Oracle Website</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								Go to the Oracle website?
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="http://oracle.com/">Yes</a>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</center>
					</div>
				</div>
			</div>
		  </div>';
	
	include_once 'includes/footer.php';
?>