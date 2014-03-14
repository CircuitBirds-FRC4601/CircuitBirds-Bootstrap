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
                            <form class="form" action="contact.php" method="post">
                            Your name:<br>
                            <input type="text" name="cf_name" placeholder="John Smith"/><br>
                            Your e-mail:<br>
                            <input type="text" name="cf_email" placeholder="team4601@gmail.com" /><br>
                            Message:<br>
                            <textarea cols="24" rows="5" name="cf_message" placeholder="Your message..."></textarea><br>
                            <div id="button-wrapper">
                            <input id="left" type="submit" value="Send" /><br>
                            <input id="right" type="reset" value="Clear" />
                        </div>
                    </form>
                        </div>

                <?php include_once('sidebar.php'); ?>

    </div>
        <?php include_once('footer.php'); ?>
        <?php include_once('modal.php'); ?>
    </div>
    </div>
<?php include_once('scripts.php'); ?>
  </body>
</html>

                <?php include_once('modal.php'); ?>
                <?php include_once('scripts.php'); ?>
                </body>
                </html>
