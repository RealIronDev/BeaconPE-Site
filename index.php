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
	            		<li class="dropdown">
	            			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Links <span class="caret"></span></a>
	            			<ul class="dropdown-menu" role="menu">
	            				<li><a data-toggle="modal" data-target="#twitter">Twitter </a></li>
	            				<li><a data-toggle="modal" data-target="#github">GitHub</a></li>
	            			</ul>
	            		</li>
	            	</ul>
	            </div>
			</div>
	     </div>';
	
	//Main Site Text
	echo '<div class="container">
			<div class="jumbotron">
				<center>
					<h1>PocketBukkit - MinecraftPE Server Software</h1>
					<p>PocketBukkit is a free, open-source server software for Minecraft: Pocket Edition written in Java.  It has a built-in Plugin API for developers to allow you to customize your server in any way you can imagine.</p>
					</br>
					<hr>
					<h1>PocketBukkit Requirements</h1>
					<p>
						In order to run the PocketBukkit software, you will need the <a href="http://java.com/download">Java Software</a> by <a href="http://oracle.com">Oracle</a>.  We recommend you use the latest version of Java to minimize problems that may occur while using PocketBukkit.</br>
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
								No downloadable versions found.
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
						<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						<a type="button" class="btn btn-success" href="forums">Yes</a>
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
						<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						<a type="button" class="btn btn-success" href="https://twitter.com/PocketBukkit">Yes</a>
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
						<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						<a type="button" class="btn btn-success" href="https://github.com/PocketBukkit">Yes</a>
					</div>
				</div>
			</div>
		  </div>';
	
	include_once 'includes/footer.php';
?>
