<?php 
session_start();
$conn=mysqli_connect("localhost","root","");
if(!$conn)
	echo mysqli_error();
//else
	//echo "successfully connected"."<br>"."<br>";

mysqli_select_db($conn,"event");
//$chk=NULL;$chk1=NULL;
if(isset($_POST['submit']))
{ 
	$chk=$_POST['user'];
	$chk1=$_POST['Password'];

$result=mysqli_query($conn,"select email,pwd from customer where email= '$chk' AND pwd= '$chk1' ");
$result1=mysqli_query($conn,"select id, name,address,mobile_no,dob,email from customer where email= '$chk'  AND pwd='$chk1'");
$count=mysqli_num_rows($result);
$count1=mysqli_num_rows($result);
if($count)
{
	
	header("Location:third.php");
   $row=mysqli_fetch_array($result1);
   $_SESSION['abc1'] =$row['name'];
   $_SESSION['abc2'] =$row['address'];
   $_SESSION['abc3'] =$row['mobile_no'];
   $_SESSION['abc4'] =$row['dob'];
  $_SESSION['abc5'] =$row['email'];
  $_SESSION['id']=$row['id'];

}
else
   {
  echo '<script language="javascript">';
  echo 'if(confirm("Invalid Password")){window.location.href = "newform1.html";} ';
  echo '</script>';
   }
}
mysqli_close($conn);
?>