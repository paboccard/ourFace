
var xhr;
function envoieRequete(action,){
	if(window.ActiveXObject){
		try{
			xhr=new ActiveXObject("Microsoft.XMLHTTP");
		}
		// autre version ie < 5.0
		catch(e){
			xhr=new ActiveXObject("MSXML2.XMLHTTP");
		}

	} else if(window.XMLHttpRequest){
		xhr=new XMLHttpRequest();
	}
	xhr.onreadystatechange=recupereReponse;
	xhr.open("GET", action+"?id=39&nom=fredou", true);
	xhr.send();
}

function recupereReponse(){
	if((xhr.readyState==4) && (xhr.status==200)){
		var data=xhr.responseText;
		info = typeof JSON !='undefined' ? JSON.parse(data) : 
		eval('('+data+')');
		alert(info.nom);
		n=document.getElem
	}
}

function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","listMessage.php");
        xmlhttp.send();
    }
}