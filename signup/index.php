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
					<div class="container">
						<div class="row">
							<div class="row">
								<div class="form-group col-xs-4">
									<label class="control-label" for="FName">First name</label>
									<input type="text" class="form-control" id="FName" placeholder="Enter first name">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-4">
									<label class="control-label" for="LName">Last name</label>
									<input type="text" class="form-control" id="LName" placeholder="Enter last name">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-6">
									<label class="control-label" for="Email">Email</label>
									<input type="email" class="form-control" id="Email" placeholder="Enter email">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-6">
									<label class="control-label" for="Password">Password</label>
									<input type="password" class="form-control" id="Password" placeholder="Enter a password">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-2">
									<label class="control-label" for="Gradelevel">Grade</label>
									<select id="Gradelevel" class="form-control">
										<option>-</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-5">
									<label class="control-label" for="SPhone">Phone Number</label>
									<input type="tel" class="form-control disabledTextInput" id="SPhone" placeholder="Enter a cellphone number, if you have one">
								</div>
							</div>
							<hr>
							<label class="control-label" for="LName">Interests</label>
							<span class="help-block">Select any of the following areas that you would like to be apart of on the team.</span>
							<div class="row">
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
							</div>
							<hr>
							<div class="row">
								<div class="form-group col-xs-6">
									<label class="control-label" for="PEmail">Parent Email</label>
									<input type="email" class="form-control disabledTextInput" id="PEmail" placeholder="Enter a parent's email.">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="btn-group  well">
								<button type="button" class="btn btn-default " onclick="Error()">Error()</button>
								<button type="button" class="btn btn-primary " onclick="ResetError()">ResetError()</button>
								<button type="button" class="btn btn-info " onclick="SuccessShowModal()">SuccessShowModal()</button>
								<button type="button" class="btn btn-success " onclick="Verify()">Verify()</button>
							</div>
						</div>
					</div>
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
					<div id="modal-body" class="modal-body">
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
var respData;
var xmlhttp = new XMLHttpRequest();

function Error() {
    document.getElementById("error-Wrapper").innerHTML = "<div class=\"alert alert-danger\"><strong>Please fill all of the fields.</strong><\/div>";
}
function ResetError() {
    document.getElementById("error-Wrapper").innerHTML = "";
}
function SuccessShowModal() {
    $('#DoneModal').modal({
        keyboard: false,
        backdrop: false
    });
	document.getElementById("modal-body").innerHTML=xmlhttp.responseText;
}
function SuccessHideModal() {
    $('#DoneModal').modal(hide);
}
function hashpasswordtext() {
    try {
        var passwordINPUT = document.getElementById("Password").value
        var hashOutput;
        var hashObject = new jsSHA(passwordINPUT, "TEXT");
        var hashout = hashObject.getHash("SHA-512", "B64", 25);
return hashout
    }
    catch (e) {
        hashout.value = e
    }
}

function Verify() {

    var docu = document;
    var FName = docu.getElementById("FName");
    var Lname = docu.getElementById("LName");
    var Email = docu.getElementById("Email");
    var Gradelevel = docu.getElementById("Gradelevel");
    Gradelevel = Gradelevel.options[Gradelevel.selectedIndex].value
    var SPhone = docu.getElementById("SPhone");
    var ParentEMail = docu.getElementById("PEmail");

    var i1a,
        i2a,
        i3a,
        i4a,
        i5a,
        i6a,
        i7a;
    var xmlHttp = null;
    var httpresp = null;
    if (((FName.value || Lname.value || Email.value || ParentEMail.value || Password.value) == "") || Gradelevel == "-") {
        console.log("IT ERRORED :D");
        Error();
    } else {
        console.log("No error this time.");
        ResetError();

        FName       = escape(FName.value);
        Lname       = escape(Lname.value);
        Email       = escape(Email.value);
        SPhone      = escape(SPhone.value.replace(/\D/g,''));
        ParentEMail = escape(ParentEMail.value);

        var URL = "http://circuitbirds.com/signup/process.php";
		var DATA;
		
        var j = {
                "First-name"  : FName,
                "Last-name"   : Lname,
                "Email"       : Email,
                "Grade-Lvl"   : Gradelevel,
                "Cell-phone"  : SPhone,
                "Parent-Email": ParentEMail,
                "Hash": hashpasswordtext()
            };
        var i = {
                "Design"     : ($("#i1").is(":checked")),
                "Writing"    : ($("#i2").is(":checked")),
                "Marketing"  : ($("#i3").is(":checked")),
                "Engineering": ($("#i4").is(":checked")),
                "Programming": ($("#i5").is(":checked")),
                "WebDesign"  : ($("#i6").is(":checked")),
                "Other"      : ($("#i7").is(":checked"))
            };
        console.log(j['First-name']);
        console.log(j['Last-name']);
        console.log(j['Grade-Lvl']);
        console.log(j['Cell-phone']);
        console.log(j['Parent-Email']);
        j = jQuery.param(j);
        i = jQuery.param(i);
        console.log(j);
        console.log(i);

        DATA = j + "&" + i;

        console.log(DATA);
		
		
		
		xmlhttp.onreadystatechange = function () {
    		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				SuccessShowModal();
        		respDATA = xmlhttp.responseText;
    		}
			else{Error();}
		}
		xmlhttp.open("POST", "process.php?m=0x7F", true);
		xmlhttp.send(DATA);


        
        //xmlHttp.open( "GET", URL, false );
        //xmlHttp.send( null );
        //httpresp = xmlHttp.responseText;

        //console.log(httpresp);
    }
}
</script>

		<script src="http://code.jquery.com/jquery-1.11.0-beta3.min.js"></script>
    		<script src="js/bootstrap.min.js"></script>
   	 	<script src="//caligatio.github.io/jsSHA/sha.js"></script>
	</body>
</html>
