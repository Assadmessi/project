<?php
header('Content-Type:text/xml;charest=utf-8');
	$host="localhost";
	$user="root";
	$pass="";
	$database="allsmileenglishclassdb";
	$connection=mysql_connect($host,$user,$pass)or die ("Couldn't connect to database");
	mysql_select_db($database);
	
	if(isset($_REQUEST["SectionID"]))
	{
		$SectionID=$_REQUEST["SectionID"];
	}
	else
	{
		$SectionID="";
	}
	
	if ($SectionID)
	{
		$query ="SELECT * from section sc,student s, enroll e
				where e.StudentID=s.StudentID
				and sc.SectionID=e.SectionID
				AND sc.SectionID='$SectionID'";
	}
	else 
	{
		$query ="SELECT * from section sc,student s, enroll e
				where e.StudentID=s.StudentID
				and sc.SectionID=e.SectionID";
	}
	$ret=mysql_query($query,$connection);
	
	if (!$ret)
	{
		echo"<p> Something went wrong:".mysql_error();+"</p>";
	}
	$num_results=mysql_num_rows($ret);
	
	if($num_results==0)
	{
		echo"<p>No such entry</p>";
	}
	else
	{
		$doc=new DOMDocument();
		$doc->formatOutput=true;
		
		$root=$doc->createElement('Root_Section');
		$root=$doc->appendChild($root);
		
		for ($i=0;$i<$num_results;$i++)
		{
			$row=mysql_fetch_array($ret);
			$node=$doc->createElement("NoteSection");
			$StudentID=$doc->createElement("StudentID");
			$StudentName=$doc->createElement("StudentName");
			
			$StudentID->appendChild($doc->createTextNode($row["StudentID"]));
			$StudentName->appendChild($doc->createTextNode($row["StudentName"]));
			
			$node->appendChild($StudentID);
			$node->appendChild($StudentName);
			
			
			$root->appendChild($node);
		}
		echo $doc->saveXML();
		mysql_close($connection);
	}
	?>
		