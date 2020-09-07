// JavaScript Document

function leaveChange() 
{
	alert('Change');     
}
	

function setupAjax(url)
{
	var url;
	//Usual code for creating an XMLHttpRequest object gos here.
		
	if(window.XMLHttpRequest)
	{
		//Code For modern browsers.
		request =new XMLHttpRequest ();
	}
	else
	{
		//code for older versions of Internet Explorer
		request =new ActiveXObject("Microsoft.XMLHTTP");
	}
		
	request.onreadystatechange=function()
	{
		if(request.readyState==4 && request.status==200)
		{
			if(request.responseXML)
			{
				updateFrontend(request.responseXML);
			}
		}
	}
		
	request.open("GET",url,true);
	request.send();
}


function navigateDatabase1(form)
{
	alert('navigateDatabase');
	var url;
	var id;
	id=form.cbocourse.value;
	var url='Tree_Structure.php?CourseNo='+id;
	setupAjax(url);
}


function updateFrontend(XML)
{
	var form=document.getElementById("mainform")
	var elements=XML.documentElement.getElementsByTagName("NoteSection");
	
	if(elements.length==0)
	{
		
	}
	else
	{
		alert(elements.length);
		count_name=elements.length
		cbotest.innerHTML="";
		cbotest.innerHTML="<option>-- Select Section --</option>";
		
		for(z=0;z<count_name;z++)
		{
			section_id=elements[z].getElementsByTagName("section_id");
			//serviceid=elements[z].getElementsByTagName("ProductID");
			type=elements[z].getElementsByTagName("type");
			//price=elements[z].getElementsByTagName("Price");
				
			var a=section_id[0].firstChild.nodeValue;
			var b=type[0].firstChild.nodeValue;
			//var c=price[0].firstChild.nodeValue;
			//var d=serviceid[0].firstChild.nodeValue;
			//document.getElementById("price").value=c;
				
			cbotest.innerHTML=cbotest.innerHTML+"<option value='"+a+"'>"+a+" | "+b+"</option>";

		}
	}
}


//-------------------------------------------	


