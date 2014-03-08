<script>
var errorReturn
function submit()
{
//do POST and session stuff
//then parse the returned text, probably JSON.
//do logic.. if there's an error, leave the modal up: else loce it and load the username.
}
function Error(err){document.getElementById("error-Wrapper").innerHTML="<div class=\"alert alert-danger\"><strong>"+err+"</strong><\/div>";}
function ShowLoginModal(){$('#LoginModal').modal({backdrop:false})}
function HideLoginModal(){$("#error-Wrapper").contents().remove();$('#LoginModal').modal(hide);}
</script>
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

