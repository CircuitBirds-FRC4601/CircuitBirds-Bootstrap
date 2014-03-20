<!DOCTYPE html>
<html>
<?php include_once( 'header.php'); ?>

<body>
    <div class="container">
        <!-- navbar -->
        <?php include_once( 'menu.php'); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-8">
                            <form class="form" action="http://circuitbirds.com/contact/contact.php" method="post">
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Your name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" rows="3" id="message" placeholder="What's up?"></textarea>
                                </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
                <?php include_once( 'sidebar.php'); ?>
            </div>
            <?php include_once( 'footer.php'); ?>
            <?php include_once( 'modal.php'); ?>
        </div>
    </div>
    <?php include_once( 'scripts.php'); ?>
</body>

</html>
