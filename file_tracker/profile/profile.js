function $(id){
	return document.getElementById(id);
}

function file_display(value){
		
		main_inner_item=document.createElement("tr");
		
		inner_item1=document.createElement("td");
		inner_item1_text=document.createTextNode(value);
		complete_item1=inner_item1.appendChild(inner_item1_text);
		
		main_inner_item.appendChild(complete_item1);
				
		$("file_list_ul").appendChild(main_inner_item);
		
		main_inner_item.idName=value;
		main_inner_item.setAttribute("onclick", "ul_click(this.idName)");
		return ;	
	
}

function ul_click(li_id){
	$("section_right").style.display="inline";
	document.getElementById("proj_id").value=li_id;
}

function validate_send_file(){
	document.getElementById("proj_name").value=document.getElementById('proj_id').value;
	var count=0;
	recipient=$("recipient").value;
	if($("recipient").value=='')
	document.getElementById("error_recipient").innerHTML="Enter the officer to submit to:";
	else{
		document.getElementById("error_recipient").innerHTML="";
		$("recipient").value=proper_recipient_name();
		count++}
	
	if(!$("app").checked)
	document.getElementById("error_approve").innerHTML="You have to approve the file before forwarding!";
	else
	{document.getElementById("error_approve").innerHTML="";count++}
	
	if(count==2)
	document.forms[1].submit();
	
}
function proper_recipient_name(){
	if(/@jtracker.com$/.test(recipient))
	{
		recipient=recipient.substring(0,recipient.length-13);
	}
	return recipient;
}