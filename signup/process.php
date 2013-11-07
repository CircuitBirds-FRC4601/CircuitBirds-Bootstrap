<?php
//$NewURL = "[mysqlserver]";
//$Srvrresp = null;

require(AbstractBase.php);
require(Writer.php);

$writer = new Writer('write.csv');
$writer->writeRow($_REQUEST['Fname'].",".$_REQUEST['Lname'].",".$_REQUEST['Email'].",".$_REQUEST['Gradelevel'].",".$_REQUEST['Sphone'].",".$_REQUEST['ParentEmail'].",".$_REQUEST['Design'].",".$_REQUEST['Writing'].",".$_REQUEST['Speaking'].",".$_REQUEST['Things'].",".$_REQUEST['Prog'].",".$_REQUEST['Web'].",".$_REQUEST['Other']);

//$NewURL = $NewURL."&Fname=".$_REQUEST['Fname']."&Lname=".$_REQUEST['Lname']."&Email=".$_REQUEST['Email']."&Gradelevel=".$_REQUEST['Gradelevel']."&Sphone=".$_REQUEST['Sphone']."&ParentEmail=".$_REQUEST['ParentEmail']."&Design=".$_REQUEST['Design']."&Writing=".$_REQUEST['Writing']."&Speaking=".$_REQUEST['Speaking']."&Things=".$_REQUEST['Things']."&Prog=".$_REQUEST['Prog']."&Web=".$_REQUEST['Web']."&Other=".$_REQUEST['Other'];
//echo($NewURL);
?>

