var xmlHttp=main();


function main()
{
	var xmlHttp;
	
	if(window.ActiveXObject)
	{
		try
		{
			xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e)
		{
			xmlHttp=false;
		}
	}
	else
	{
		try
		{
			xmlHttp= new XMLHttpRequest();
		}
		catch(e)
		{
			xmlHttp=false;
		}	
	}
	if(!xmlHttp)
		alert("cant create the object hoss");
	else
	return xmlHttp;
}

function process()
{
	if(xmlHttp.readyState==0 || xmlHttp.readyState==4)
	{
		user_name = encodeURIComponent(document.getElementById("username").value);
		xmlHttp.open("GET", "foodstore.php?user_name=" + user_name, true);
		xmlHttp.onreadystatechange = handleServerResponse;
		xmlHttp.send(null);
	}
	else
	{
		setTimeout('process()',1500);
	}	
}

function handleServerResponse()
{
	if(xmlHttp.readyState==4)
	{
		if(xmlHttp.status==200)
		{
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message = xmlDocumentElement.firstChild.data;
			document.getElementById("errorusername").innerHTML='<span style="color:blue">' + message + '</span>';
			setTimeout('process()',1500);
		}
		else
		{
		}
	}
}
















