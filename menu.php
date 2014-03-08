<?php
echo $_SERVER[REQUEST_URI];
if (strpos($_SERVER[REQUEST_URI],"ponsors.php")==true) {$PartialURI = "SPONS";}
else {echo "hi";}
?>

<div class="navbar navbar-inverse navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a id="Title" class="navbar-brand">FRC #4601 &middot; Circuit Birds</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="//circuitbirds.com">Home</a></li>
						<li><a href="sponsors/">Sponsors</a></li>
						<li><a href="contact/">Contact</a></li>
						<li><a onclick="ShowLoginModal()">Login</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="http://www.thebluealliance.com/">The Blue Alliance <span class="glyphicon glyphicon-share"></span></a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">usfirst.org <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="//www.usfirst.org/roboticsprograms/frc/resources">Resources <span class="glyphicon glyphicon-share"></span></a>
							</li>
							<li class="divider"></li>
							<li><a href="http://www.usfirst.org/roboticsprograms/frc/resources">2014 Game <span class="glyphicon glyphicon-share"></span></a></li>
							<li><a href="http://frc-manual.usfirst.org/">2014 <b>Safety</b> Manual <span class="glyphicon glyphicon-share"></span></a></li>
						</ul>
					</ul>
				</div>
			</div> <!-- End Header -->
