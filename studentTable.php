<?php

include('connect.php');

?>
<!DOCTYPE html>
<html>
<head>
<link href="script/DatePicker/datepicker.css" rel="stylesheet" type="text/css"/>
  <script src="script/DatePicker/datepicker.js" type="text/jscript"></script>

<style>
table {
    width:40%;
    border-collapse: collapse;
    text-align: center;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
    text-align: center;
}

th {text-align: center;}
</style>

</head>
<body>
<form action="StudentTable.php" method="POST">
<tr>
      <td>Attendance Date</td>
      <td>
        <input type="text" name="txtAD" value="<?php echo date('d-M-Y');?>" onFocus="showCalender(calender,this)" required/>
      </td>
</tr>
<?php
if(!isset($_GET['q']))
{
   //echo "<script>window.location='Attendance.php'</script>";
}
else{

     $q = $_GET['q'];

     $sql="SELECT * FROM section cl, student s, enroll e
          WHERE cl.SectionID = '$q'
          and cl.SectionID=e.SectionID
          and e.StudentID=s.StudentID";

    $result = mysql_query($sql);
echo "<table>
<tr>
<th>Firstname</th>
<th>Age</th>
<th>Absent</th>
<th>Present</th>

</tr>";

while($row = mysql_fetch_array($result))
{
    $StudentName=$row['StudentName'];
    $StudentID=$row['StudentID'];
    $Age=$row['Age'];
    echo "<tr>";
    echo "<td>" . $StudentName . "</td>";
    echo "<td>" . $Age . "</td>";
    echo "<td><input type='checkbox'  name='attA[]'' value='A'/></td>";
    echo "<td><input type='checkbox' checked='checked'  name='attP[]' value='P'  /></td>";
  // "<td></td>";
    echo " <input type='hidden' name='rollno[]' value='$StudentID' />";
    echo "</tr>";
}
echo "<tr>";
    echo "<td><input type='submit' name='btnsave' value='Save Record'/></td>";
 echo "</tr>";
echo "</table>";
}
if(isset($_POST['btnsave']))
{
     $attA = $_POST['attA'];
    $attP = $_POST['attP'];
    $rollno = $_POST['rollno'];
    $AttendanceDate=date("Y-m-d",strtotime($_POST['txtAD']));


     foreach($attA as $key => $attendance) 
    {
       //$at = $attendance ? 'P' : 'A';
        $query = "INSERT INTO attendence(StudentID,Status,AttendanceDate) VALUES ('".$rollno[$key]."','".$attendance."','$AttendanceDate') ";
        $result = mysql_query($query);

        if ($result) 
        {
            echo "<script>window.alert('Save')</script>";
            echo "<script>window.location='Attendance.php'</script>";
        }   
        else
        {
            echo "<p>Error found in this page" . mysql_error() . "</p>";
        }
    }      

    foreach($attP as $key => $attendance) 
    {
       // $at = $attendance ? 'P' : 'A';
        $query = "INSERT INTO attendence(StudentID,Status,AttendanceDate) VALUES ('".$rollno[$key]."','".$attendance."','$AttendanceDate') ";
        $result = mysql_query($query);

        if ($result) 
        {
            echo "<script>window.alert('Save')</script>";
            echo "<script>window.location='Attendance.php'</script>";
        }   
        else
        {
            echo "<p>Error found in this page" . mysql_error() . "</p>";
        }
    }           
     
   // $Status=$_POST['Status'];
    
    /*foreach($att as $key => $attendance) 
    {
        $at = $attendance ? 'P' : 'A';
       echo $query = "INSERT INTO attendence(StudentID,AttendanceDate,Status) VALUES ('".$rollno[$key]."','$AttendanceDate','".$at."') ";
        $result = mysql_query($query);

    }  
     if ($result) 
        {
            echo "<script>window.alert('Save')</script>";
            echo "<script>window.location='Attendance.php'</script>";
        }   
        else
        {
            echo "<p>Error found in this page" . mysql_error() . "</p>";
        } */        

}

?>
</form>
</body>
</html>