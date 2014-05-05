function ShowLoginModal() {
    $('#LoginModal').modal({
        backdrop: false
    })
}

function HideLoginModal() {
    $("#error-Wrapper").contents().remove();
    $('#LoginModal').modal(hide);
}


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
    document.getElementById("modal-body").innerHTML = xmlhttp.responseText;
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
    } catch (e) {
        hashout.value = e
    }
}

function Verify() {

    var docu = document,
        FName = $("#FName"),
        Lname = $("#LName"),
        Email = $("#Email"),
        Gradelevel = $("#Gradelevel"),
        SPhone = $("#SPhone"),
        ParentEMail = $("#PEmail");

    Gradelevel = Gradelevel.options[Gradelevel.selectedIndex].value;

    if (((FName.value || Lname.value || Email.value || ParentEMail.value || Password.value) == "") || Gradelevel == "-") {
        console.log("Some blank fields");
        Error();
    } else {
        console.log("No error this time.");
        ResetError();

        FName = escape(FName.value);
        Lname = escape(Lname.value);
        Email = escape(Email.value);
        SPhone = escape(SPhone.value.replace(/\D/g, ''));
        ParentEMail = escape(ParentEMail.value);

        var j = {
            "First-name": FName,
            "Last-name": Lname,
            "Email": Email,
            "Grade-Lvl": Gradelevel,
            "Cell-phone": SPhone,
            "Parent-Email": ParentEMail,
            "Hash": hashpasswordtext()
        };
        var i = {
            "Design": ($("#i1").is(":checked")),
            "Writing": ($("#i2").is(":checked")),
            "Marketing": ($("#i3").is(":checked")),
            "Engineering": ($("#i4").is(":checked")),
            "Programming": ($("#i5").is(":checked")),
            "WebDesign": ($("#i6").is(":checked")),
            "Other": ($("#i7").is(":checked"))
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

        var DATA = j + "&" + i,
            xmlhttp = new XMLHttpRequest(),
            respDATA;

        console.log(DATA);
        //Make this look like the one below.
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                SuccessShowModal();
                respDATA = xmlhttp.responseText;
            } else {
                Error();
            }
        }
        xmlhttp.open("POST", "process.php?m=0x7F", true);
        xmlhttp.send(DATA);



        //xmlHttp.open( "GET", URL, false );
        //xmlHttp.send( null );
        //httpresp = xmlHttp.responseText;

        //console.log(httpresp);
    }
}

function success() {
    //do POST and session stuff
    //then parse the returned text, probably JSON.
    //do logic.. if there's an error, leave the modal up: else close it and load the username.
}

function SendMessage() {


    console.log("Send Message");

    var xmlHttp = new XMLHttpRequest();
    var httpresp = null;

    var name = escape(document.getElementById("name").value),
        email = escape(document.getElementById("email").value),
        message = escape(document.getElementById("message").value);

    var messageBody = {
        "name": name,
        "email": email,
        "message": message,
    };

    messageBody = jQuery.param(messageBody);

    var DATA = messageBody,
        xmlhttp = new XMLHttpRequest(),
        respDATA;

    console.log(DATA);

    xmlhttp.open("POST", "http://circuitbirds.com/contact/contact.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(DATA);
    console.log(xmlHttp.responseText);


    /*xmlhttp.onreadystatechange = function () {
        console.log("Status:"+xmlHttp.status+" ,State:"+xmlHttp.readyState);
        if (xmlhttp.readyState == 4 && (xmlhttp.status == 200 || xmlHttp.status == 304)) {
        	respDATA = xmlhttp.responseText;
            console.log(respDATA);
        }
	   else{Error();console.log("Error!")};
    }*/

}
