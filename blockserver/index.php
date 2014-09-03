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
	            	<a class="navbar-brand">BlockServer</a>
	            </div>
	            <div class="navbar-collapse collapse">
	            	<ul class="nav navbar-nav">
	            		<li><a data-toggle="modal" data-target="#downloads">Downloads </a></li>
	            		<li><a data-toggle="modal" data-target="#forums">Forums </a></li>
						<li><a data-toggle="modal" data-target="#webchat">WebChat </a></li>
						<li><a data-toggle="modal" data-target="#github">GitHub </a></li>
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
					<h1>BlockServer | Server Software</h1>
					<p>
						BlockServer is a server software for Minecraft: Pocket Edition.  It uses the <a href="http://pocketbukkit.beaconpe.net">PocketBukkit API</a> to load and run plugins.  It is still in development so DO NOT report unimplemented features/items!
					</p>
					</br>
					<hr>
					<h1>How To Use BlockServer</h1>
					<p>
						To use BlockServer, <a data-toggle="modal" data-target="#downloads">download the latest version</a> as well as your Operating Systems start file.  Please note that you WILL need to have <a data-toggle="modal" data-target="#java">Java</a> by <a data-toggle="modal" data-target="#oracle">Oracle</a> installed on your machine in order for it to run!
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
						<center><h4 class="modal-title" id="downloadsLabel">BlockServer Downloads</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								<a type="button" class="btn btn-danger" href="download/software/0001/BlockServer.jar">Build #0001</a>
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="download/start/windows/start.bat">Windows Start File</a>
							<a type="button" class="btn btn-warning" href="download/start/mac-linux/start.sh">Linux/Mac Start File</a>
						</center>
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
						<center><h4 class="modal-title" id="forumsLabel">BlockServer Forums</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								Go to the BlockServer Forums?
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="http://beaconpe.net/forums">Yes</a>
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
						<center><h4 class="modal-title" id="webchatLabel">BlockServer WebChat</h4></center>
					</div>
					<div class="modal-body">
						<center><iframe src="http://webchat.freenode.net?channels=%23BlockServerProject&uio=d4" width="550" height="500"></iframe></center>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
						<center><h4 class="modal-title" id="githubLabel">BlockServer GitHub</h4></center>
					</div>
					<div class="modal-body">
						<center>
							<p>
								Go to the BlockServer GitHub page?
							</p>
						</center>
					</div>
					<div class="modal-footer">
						<center>
							<a type="button" class="btn btn-success" href="https://github.com/BlockServerProject">Yes</a>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</center>
					</div>
				</div>
			</div>
		  </div>';
	
	/* \/\/\/ DO NOT REMOVE/EDIT THIS \/\/\/ */
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
	
	/* \/\/\/ DO NOT REMOVE/EDIT THIS \/\/\/ */
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
