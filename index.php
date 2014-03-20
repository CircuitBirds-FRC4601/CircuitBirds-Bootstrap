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
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseBrunch">
											Meet the Team
										</a>
									</h4>
								</div>
								<div id="collapseBrunch" class="panel-collapse collapse in">
									<div class="panel-body">
										<img src="images/img_0493.png" class="img-responsive" alt="Meet the Team" /><hr>
										<div class="well">This past week on March 1, 2014, we held a brunch in the cafeteria of Canfield High School to show off our hard work to our coperate sponsors and parents. Parents were able to meet a few of our sponsors and see last year's robot in action.
										</div>
									</div>
								</div>
							</div>
                            <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseBakeSale">
											Bake Sale!
										</a>
									</h4>
								</div>
								<div id="collapseBakeSale" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="well">We will be at <a href="http://canfield.access-k12.org/chs/">Canfield High School</a><sup><span style="font-size:.9em" class="glyphicon glyphicon-share"></span></sup> on December 7<sup>th</sup> for Canfield High School's annual Craft Show. Our table will be next to the CAD Lab, room 222, and baked goods of all kinds will be sold. The sale of these items will support the team in next year's competition,  which begins mid-january. Last year's robot will be on display all day.
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseLouis">
											On our Way to St. Louis!
										</a>
									</h4>
								</div>
								<div id="#collapseLouis" class="panel-collapse collapse">
									<div class="panel-body">
										<img src="images/img_0493.png" class="img-responsive" alt="The team and awards in Pittspurgh 2013" /><hr>
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
