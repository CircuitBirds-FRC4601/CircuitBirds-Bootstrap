var errorReturn;
var respData;
var xmlhttp = new XMLHttpRequest();

function ShowLoginModal(){$('#LoginModal').modal({backdrop:false})}
function HideLoginModal() {$("#error-Wrapper").contents().remove();$('#LoginModal').modal(hide);}


function Error(err) {
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
    Gradelevel = Gradelevel.options[Gradelevel.selectedIndex].value;
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
function success()
{
    //do POST and session stuff
    //then parse the returned text, probably JSON.
    //do logic.. if there's an error, leave the modal up: else loce it and load the username.
}
