
function setHiddenTag(id)
{
	var number = new String(id);
	var idCode = "idcd" + number;
	var idBtn = "idbtn" + number;
	var code = document.getElementById(idCode).value;
	var btn = document.getElementById(idBtn).value = code;
}
