<!DOCTYPE html>
<html>
<?php include_once( 'header.php'); ?>

<body>
    <div class="container">
        <?php include_once( 'menu.php'); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="container">
                        <!--PUT THE RELAVANT STUFF HERE-->
                        <!--We will start with list of place to learn more at.-->
                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading h1">Learn More!</div>
                            <!-- List group -->
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="//arduino.cc/">
                                        <img src="images/remote_favs/arduino" width="20" type="image/x-icon" />
                                    </a>&nbsp;<a href="//arduino.cc/">arduino.cc</a> The base of the camp, everything about the arduino can be found here.
                                </li>

                                <li class="list-group-item">
                                    <a href="//digikey.com/">
                                        <img src="images/remote_favs/digikey" width="20" type="image/x-icon" />
                                    </a>&nbsp;<a href="//digikey.com/">digikey.com</a> sells bulk components at very good prices.
                                </li>

                                <li class="list-group-item">
                                    <a href="//sparkfun.com/">
                                        <img src="images/remote_favs/sparkfun" width="20" type="image/x-icon" />
                                    </a>&nbsp;<a href="//sparkfun.com/">sparkfun.com</a> sells kits for beginners, publishes tutorials and carries hard to find, specialty components.
                                </li>

                                <li class="list-group-item">
                                    <a href="//adafruit.com/">
                                        <img src="images/remote_favs/adafruit" width="20" type="image/x-icon" />
                                    </a>&nbsp;<a href="//adafruit.com/">adafruit.com</a> sells kits, arduino addons and creates tutorials for those items.
                                </li>

                                <li class="list-group-item">
                                    <a href="//makezine.com/">
                                        <img src="images/remote_favs/makezine" width="20" type="image/x-icon" />
                                    </a>&nbsp;<a href="//makezine.com/">makezine.com</a> publishes tutorials for new projects geared toward beginners.
                                </li>
                            </ul>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading h3">
                                Programming at Home <small>Setting up the IDE</small>
                            </div>

                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="//arduino.cc/en/Guide/HomePage"> 1. Head over to the Arduino website to set get set up. (Remember, the RedBoard is the same as an Arduino UNO)</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="//github.com/woo2/CBRoboLib/archive/master.zip">2. Click this link to download a copy of the Robot Library</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="//arduino.cc/en/Guide/Libraries">3. Install the Library into the Arduino IDE</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Now you can upload your code! A complete diagram of what we did can be found <a class="h4" href="/images/RobotDiagram.png">Here</a>.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        The complete Library can be found <a class="h4" href="https://github.com/woo2/CBRoboLib">Here</a>.
                                    </td>
                                </tr>
                            </table>


                        </div>
                    </div>

                </div>
                <?php include_once( 'sidebar.php'); ?>
            </div>
        </div>
        <?php include_once( 'footer.php'); ?>
        <?php include_once( 'modal.php'); ?>
    </div>
    <?php include_once( 'scripts.php'); ?>
</body>

</html>
