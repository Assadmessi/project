<?php
session_start();
include('connect.php');
echo $EnrollID=$_GET['EnrollID'];


	//echo $customerid=$_REQUEST['CustomerID'];
    $query="UPDATE Enroll
    		SET status='Complete'
            WHERE EnrollID='$EnrollID'";
    $ret=mysql_query($query);
    
    if($ret)
    {
        echo "<script>window.alert('Student Enroll Completely Finish !!')</script>";
    echo "<script>window.location='Enroll_Confirm.php'</script>"; 
    }
	else
	{
	   echo "<p>Error in Complete Enroll" . mysql_error() . "</p>";	
	}

 

?>