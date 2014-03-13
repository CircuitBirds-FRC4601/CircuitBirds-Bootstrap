<!DOCTYPE html>
<html>
	<?php include_once('header.php'); ?>
	<body>
		<div class="container">
			<!-- navbar -->
			<?php include_once('menu.php'); ?>

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
										<img src="images/img_0493.png" class="img-responsive" alt="" /><hr>
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
										<img src="images/img_0493.png" class="img-responsive" alt="" /><hr>
										<div class="well">After winning the Rookie All-star award, we got ourselves a spot in the championship! This picture was taken while cleaning up our pit area and includes almost all our team members.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				    <?php include_once('sidebar.php'); ?>
				</div>
				<?php include_once('footer.php'); ?>
			</div>
		</div><!--/CONTAINER-->
        <?php include_once('modal.php'); ?>
        <?php include_once('scripts.php'); ?>
	</body>
</html>
