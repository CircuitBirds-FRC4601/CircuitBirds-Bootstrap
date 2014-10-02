<!--Begin Menu-->
<?php
$URI = $_SERVER['REQUEST_URI'];
if (strpos($URI, "ponsors.php")==true) {$PageID="SPONS";}
else if (strpos($URI, "menu.php")==true) {$PageID="MENU";}
else if (strpos($URI, "contact.php")==true) {$PageID="CONTACT";}
else if (strpos($URI, "index.php")==true) {$PageID="HOME";}
else if (strpos($URI, "mail.php")==true) {$PageID="MAIL";}
else if (strpos($URI, "camp.php")==true) {$PageID="CAMP";}
else if (strpos($URI, "calendar.php")==true) {$PageID="CALENDAR";}
else if (strpos($URI, "affiliates.php")==true) {$PageID="AFFIL";}
else {$PageID="HOME";}
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
            <li<?php if($PageID=="HOME"){echo " class=\"active\"";} ?>><a href="index.php">Home</a>
            </li>
            <li<?php if($PageID=="SPONS"){echo " class=\"active\"";} ?>><a href="sponsors.php">Sponsors</a>
            </li>
            <li<?php if($PageID=="CONTACT"){echo " class=\"active\"";} ?>><a href="contact.php">Contact</a>
            </li>
            <li<?php if($PageID=="AFFIL"){echo " class=\"active\"";} ?>><a href="affiliates.php">Affiliates</a>
            </li>
            <li<?php if($PageID=="CALENDAR"){echo " class=\"active\"";} ?>><a href="calendar.php">Calendar</a>
            </li>
            <li<?php if($PageID=="CAMP"){echo " class=\"active\"";} ?>><a href="camp.php">Summer Camp 2014</a>
            </li>
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
<!-- End Menu -->
