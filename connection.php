<?php
error_reporting(0);
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("student2015",$conn);  
?>
<?php

$ID=$_POST['ID'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$session=$_POST['session'];
$idno=$_POST['idno'];
$branch_name=$_POST['branch_name'];
$year=$_POST['year'];
$semester=$_POST['semester'];
$date=$_POST['date'];
$month=$_POST['month'];
$address=$_POST['address'];




$sql="INSERT into studentrecords values('$ID','$fname','$lname','$session','$idno','$branch_name','$year','$semester','$date','$month','$address')";

$sql="INSERT into parentsrecords values('$ID','$fname','$lname','$session','$idno','$branch_name','$year','$semester','$date','$month','$address')";

$sql="INSERT into accounts values('$ID','$fname','$lname','$session','$idno','$branch_name','$year','$semester','$date','$month','$address')";
mysql_query($sql);




if(!$qury)

echo mysql_error();
else 
echo "Successful <a href='parent.php'>Register Again</a>";
?>