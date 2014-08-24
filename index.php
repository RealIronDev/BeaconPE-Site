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
	            	<a class="navbar-brand" href="index.php">PocketBukkit</a>
	            </div>
	            <div class="navbar-collapse collapse">
	            	<ul class="nav navbar-nav">
	            		<li><a href="index.php">Home </a></li>
	            		<li><a data-toggle="modal" data-target="#downloads">Downloads </a></li>
	            		<li><a href="forums">Forums </a></li>
	            		<li class="dropdown">
	            			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Links <span class="caret"></span></a>
	            			<ul class="dropdown-menu" role="menu">
	            				<li><a href="https://twitter.com/PocketBukkit">Twitter </a></li>
	            				<li><a href="https://github.com/PocketBukkit">GitHub</a></li>
	            			</ul>
	            		</li>
	            	</ul>
	            	<ul class="nav navbar-nav navbar-right">
	            		<li><a href="#">Sign In</a></li>
	            	</ul>
	            </div><!--/.nav-collapse -->
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
						In order to run the PocketBukkit software, you will need the <a href="http://java.com/download">Java Software</a> by <a href="http://oracle.com">Oracle</a>.  We reccomend you use the latest version of Java to minimize problems that may occur while using PocketBukkit.</br>
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
						<p>
							No downloadable versions found.
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		  </div>';
	
	include_once 'includes/footer.php';
?>