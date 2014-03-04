<!DOCTYPE html>
<html>
	<head>
		<title>CircuitBirds 4601</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
		<style>
		</style>
	</head>
	<body>
		<div class="container">
			<!-- Header -->
			<?php include_once('header.php'); ?>

			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											Bake Sale!
										</a><span class="label label-danger">New</span>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<img src="http://circuitbirds.com/images/img_0493.png" class="img-responsive" alt="" /><hr>
										<div class="well">We will be at <a href="http://canfield.access-k12.org/chs/">Canfield High School</a> <sup><span style="font-size:.9em" class="glyphicon glyphicon-share"></span></sup> on December 7<sup>th</sup> for Canfield High School's annual Craft Show. Our table will be next to the CAD Lab, room 222, and baked goods of all kinds will be sold. The sale of these items will support the team in next year's competition,  which begins mid-january. Last year's robot will be on display all day. 
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											On our Way to St. Louis!
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<img src="http://circuitbirds.com/images/img_0493.png" class="img-responsive" alt="" /><hr>
										<div class="well">After winning the Rookie All-star award, we got ourselves a spot in the championship! This picture was taken while cleaning up our pit area and includes almost all our team members.
										</div>
									</div>
								</div>
							</div>
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
				</div>
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


<script>
var errorReturn
function submit()
{
//do POST and session stuff
//then parse the returned text, probably JSON.
//do logic.. if there's an error, leave the modal up: else loce it and load the username. 
}
function Error(err){document.getElementById("error-Wrapper").innerHTML="<div class=\"alert alert-danger\"><strong>"+err+"</strong><\/div>";}
function ShowLoginModal(){$('#LoginModal').modal({backdrop:false})}
function HideLoginModal(){$("#error-Wrapper").contents().remove();$('#LoginModal').modal(hide);}
</script>
<script src="//code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
	</body>
</html>
