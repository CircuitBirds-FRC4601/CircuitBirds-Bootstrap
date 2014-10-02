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
                            <?php
                                if(isset($Return_type)&&isset($Message)) {echo "<div class=\"alert alert-".$Return_type."\"><strong>".$Message."</strong></div><br>";}
                                elseif(isset($Return_type)&&!isset($Message) || !isset($Return_type)&&isset($Message)) {echo "Something went wrong. If you think the problem is on our end, please email us about this error at team4601@gmail.com";}
                                //{echo "Something went very wrong. Please email us about this error at team4601@gmail.com.";}
                            ?>
                            <form class="form" action="//circuitbirds.com/mail.php" method="GET">
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" rows="3" id="message" name="message" placeholder="What's up?"></textarea>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="copy" type="checkbox"> Send a copy to my email
                                    </label>
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

