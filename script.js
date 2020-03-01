function check_empty()
{
	if(document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") 
	{
		alert("Please do not try to act oversmart and fill the form nicely. :)");
	} else {
		document.getElementById('form').submit();
		alert('Well done. We will get back to you if we find this a valid result query');
	}
}
function div_show()
{
	document.getElementById('abc').style.display = "block";
}
function div_hide() {
	document.getElementById('abc').style.display = "none";
}