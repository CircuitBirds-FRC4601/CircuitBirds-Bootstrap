<!DOCTYPE html>
<html>
  <head>
    <title>CircuitBirds 4601</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
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
            <li><a href="http://www.thebluealliance.com/">The Blue Alliance <span class="glyphicon glyphicon-share"></span></a>
            </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">usfirst.org <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="//www.usfirst.org/roboticsprograms/frc/resources">Resources <span class="glyphicon glyphicon-share"></span></a>
              </li>
              <li class="divider"></li>
              <li><a href="http://www.usfirst.org/roboticsprograms/frc/resources">2014 Game <span class="glyphicon glyphicon-share"></span></a>
              </li>
              <li><a href="http://frc-manual.usfirst.org/">2014 <b>Safety</b> Manual <span class="glyphicon glyphicon-share"></span></a>
              </li>
            </ul>
          </ul>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8" style="border:1px">
            <div class="container">
              <ul class="">
                <li class="moded">
                  NASA
                </li>
                <li class="moded">
                  Canfield Board of Education
                </li>
                <li class="moded">
                  City Machine Technology
                </li>
                <li class="moded">
                  Lube Plus
                </li>
                <li class="moded">
                  Forbush Machine
                </li>
                <li class="moded">
                  Ramunno Builders
                </li>
                <li class="moded">
                  Mahoning Valley Anesthesia
                </li>
                <li class="moded">
                  BlackRock
                </li>
                <li class="moded">
                  Match Lite Studios
                </li>
                <li class="moded">
                  True Tread Tire
                </li>
                <li class="moded">
                  Cornersburg Party Shop
                </li>
                <li class="moded">
                  IES
                </li>
                <li class="moded">
                  The Lions
                </li>
                <li class="moded">
                  the Kiwanis
                </li>
                <li class="moded">
                  Hitachi
                </li>
                <li class="moded">
                  Lowes
                </li>
                <li class="moded">
                  Home Depot
                </li>
                <li class="moded">
                  Baird Brothers
                </li>
                <li class="moded">
                  Fairway Ford
                </li>
                <li class="moded">
                  The Moore Family
                </li>
                <li class="moded">
                  UPS
                </li>
                <li class="moded">
                  Tringheses' Cornersburg Italian Specialties
                </li>
                <li class="moded">
                  Giant Eagle
                </li>
                <li class="moded">
                  Walgreens
                </li>
                <li class="moded">
                  Broad Street Diner
                </li>
                <li class="moded">
                  The Manor
                </li>
                <li class="moded">
                  Davidson's
                </li>
              </ul>
            </div>
      </div>
      <div class="col-md-4">
						<?php include_once('sidebar.php'); ?>
					</div>
    </div>
    <div style="padding-top:20px;" class="row">
      <hr>
      <div class="col-md-3 col-md-offset-4">
        <div class="well pull-right well-sm"><span class="label label-default">Copyright&copy; 2013 &middot; CircuitBirds.com</span></div>
      </div>
    </div><!--/CONTAINER-->
		
		<!-- Login Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginPopup" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">Login to the team member area. If you are not a part of the team, Talk to Mr. Crum in room 222.<strong>This has not yet been implemented, so it does nothing.</strong><hr>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <form class="form form-inline">
                  <div id="error-Wrapper"></div>
                  <div class="form-group">
                    <label class="control-label" for="FName">username</label>
                    <input type="text" class="form-control" disabled="disabled" id="User" placeholder="Username...">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="LName">password</label>
                    <input type="password" class="form-control" disabled="disabled" id="Pass" placeholder="Password..">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="btn-group">
              <button type="button" class="btn btn-default" disabled="disabled" onclick="Error()">Login</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="HideLoginModal()">Cancel</button>
            </div>
          </div>
        </div><!-- /MODAL-CONTENT -->
      </div><!-- /MODAL-DIALOG -->
    </div><!-- /MODAL -->
    </div>
    </div>
<script src="//code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>
