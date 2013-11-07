<!DOCTYPE html>
<html>
	<head>
		<title>Sign up for JETS!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Canfield JETS &amp; CircuitBirds Signup</a>
				</div>
			</div>
			<form class="form">
				<div class="well">
					<div id="error-Wrapper"></div>
					<div class="form-group"  style="width:36%;">
						<label class="control-label" for="FName">First name</label>
						<input type="text" class="form-control" id="FName" placeholder="Enter first name">
					</div>
					<div class="form-group"  style="width:36%;">
						<label class="control-label" for="LName">Last name</label>
						<input type="text" class="form-control" id="LName" placeholder="Enter last name">
					</div>
					<div class="form-group"  style="width:50%;">
						<label class="control-label" for="Email">Email</label>
						<input type="email" class="form-control" id="Email" placeholder="Enter email">
					</div>
					<div class="form-group" style="width:75px;">
						<label class="control-label" for="Gradelevel">Grade</label>
						<select id="Gradelevel" class="form-control">
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
						</select>
					</div>
					
					<div class="form-group" style="width:39%;">
						<label class="control-label" for="SPhone">Phone Number</label>
						<input type="tel" class="form-control disabledTextInput" id="SPhone" placeholder="Enter a cellphone number, if you have one">
					</div>
					<hr>
					<label class="control-label" for="LName">My Interests</label>
					<span class="help-block">Select any of the following options that you are interested in. If none of these interest you, but you want to be on the team, that's okay!</span>
  					<div class="form-inline">
						<div class="checkbox">
    						<label style="padding:10px;"><input id="i1" type="checkbox"> Design/art</label>
						</div>
						<div class="checkbox">
    						<label style="padding:10px;"><input id="i2" type="checkbox"> Writing</label>
						</div>
						<div class="checkbox">
    						<label style="padding:10px;"><input id="i3" type="checkbox"> Public Speaking or Marketing</label>
						</div>
						<div class="checkbox">
    						<label style="padding:10px;"><input id="i4" type="checkbox"> Mechanical/Electrical Things </label>
						</div>
						<div class="checkbox">
    						<label style="padding:10px;"><input id="i5" type="checkbox"> Programming</label>
						</div>
						<div class="checkbox">
    						<label style="padding:10px;"><input id="i6" type="checkbox"> Web Design</label>
						</div>
						<div class="checkbox">
    						<label style="padding:10px;"><input id="i7" type="checkbox"> Other</label>
						</div>
					</div>
					<hr>
				<div class="form-group"  style="width:50%;">
					<label class="control-label" for="PEmail">Parent Email</label>
					<input type="email" class="form-control disabledTextInput" id="PEmail" placeholder="Enter a parent's email.">
				</div>
				</div>
				<div class="btn-group  well">
					<button type="button" class="btn btn-default " onclick="Error()">Error()</button>
					<button type="button" class="btn btn-primary " onclick="ResetError()">ResetError()</button>
					<button type="button" class="btn btn-info " onclick="SuccessShowModal()">SuccessShowModal()</button>
					<button type="button" class="btn btn-success " onclick="Verify()">Verify()</button>
				</div>
			</form>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="DoneModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>- - We want the user to have to choose., closingthis way will probably break somehing in the future -->
							<h4 class="modal-title">Success! :D</h4>
						</div>
						<div class="modal-body">
							You are now Signed up for Team 4601, and all of the information that you have provided has been securely saved.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal" onclick="SuccessHideModal()">Close (These use the same function for now)</button>
							<button type="button" class="btn btn-warning" data-dismiss="modal" onclick="SuccessHideModal()">Close</button>
						</div>
					</div><!-- /MODAL-CONTENT -->
				</div><!-- /MODAL-DIALOG -->
			</div><!-- /MODAL -->
		</div><!--/CONTAINER-->
	
<script>
var URL = "http://circuitbirds.com/signup/process.php?";

function Error(){document.getElementById("error-Wrapper").innerHTML="<div class=\"alert alert-danger\"><strong>Please fill all of the fields.</strong><\/div>";}
function ResetError(){document.getElementById("error-Wrapper").innerHTML="";}
function SuccessShowModal(){$('#DoneModal').modal({keyboard:false, backdrop:false})}
function SuccessHideModal(){$('#DoneModal').modal(hide)}
function Verify(){
var docu = document;
var FName = docu.getElementById("FName");
var Lname = docu.getElementById("LName");
var Email = docu.getElementById("Email");
var Gradelevel = docu.getElementById("Gradelevel");
var SPhone = docu.getElementById("SPhone");
var ParentEMail = docu.getElementById("PEmail");
var i1 = $("#i1").is(":checked");
var i2 = $("#i2").is(":checked");
var i3 = $("#i3").is(":checked");
var i4 = $("#i4").is(":checked");
var i5 = $("#i5").is(":checked");
var i6 = $("#i6").is(":checked");
var i7 = $("#i7").is(":checked");
var i1a,i2a,i3a,i4a,i5a,i6a,i7a;
var xmlHttp = null;
var URL = "http://circuitbirds.com/signup/process.php?";
var httpresp = null;
console.log("Fname: " + FName.value + "<> LName: " + LName.value + " <> Email: " + Email.value + " <> SPhone: " + SPhone.value + " <> Gradelevel: " + Gradelevel.value + " <> ParentEMail: " + ParentEMail.value + " " + i1+ " " +i2+ " " +i3+ " " +i4+ " " +i5+ " " +i6+ " " +i7);

if(((FName.value || Lname.value || Email.value || ParentEMail.value) == "")){console.log("IT ERRORED :D"); Error();}
else{console.log("No error this time.");ResetError();}

if(i1==true){i1a="yes";}else{i1a="no";}
if(i2==true){i2a="yes";}else{i2a="no";}
if(i3==true){i3a="yes";}else{i3a="no";}
if(i4==true){i4a="yes";}else{i4a="no";}
if(i5==true){i5a="yes";}else{i5a="no";}
if(i6==true){i6a="yes";}else{i6a="no";}
if(i7==true){i7a="yes";}else{i7a="no";}

FName = escape(FName.value);console.log(FName);
Lname = escape(Lname.value);console.log(Lname);
Email = escape(Email.value);console.log(Email);
SPhone = escape(SPhone.value);console.log(SPhone);
ParentEMail = escape(ParentEMail.value);console.log(ParentEMail);

URL = URL + "Fname=" + FName;
URL = URL + "&Lname=" + Lname;
URL = URL + "&Email=" + Email;
URL = URL + "&Gradelevel=" + Gradelevel.value;
URL = URL + "&Sphone=" + SPhone;
URL = URL + "&ParentEmail=" + ParentEMail;
URL = URL + "&Design=" +i1a;
URL = URL + "&Writing=" +i2a;
URL = URL + "&Speaking=" +i3a;
URL = URL + "&Things=" +i4a;
URL = URL + "&Prog=" +i5a;
URL = URL + "&Web=" +i6a;
URL = URL + "&Other=" +i7a;
console.log(URL);
xmlHttp = new XMLHttpRequest();
xmlHttp.open( "GET", URL, false );
xmlHttp.send( null );
httpresp = xmlHttp.responseText;
console.log(httpresp);
//have a line for each field to be checked, unfortunatly there is no way to do this dynamically.
//document.getElementsByClassName("form-group").className += "has-warning";
}//Include show/hide/enable/disable for cphone number!
</script>
	
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>