<?php 
session_start();
$conn=mysqli_connect("localhost","root","");
if(!$conn)
	echo mysqli_error();
mysqli_select_db($conn,"event");

if(isset($_POST['Update']))
{
  $chk=$_POST['name'];
  $chk1=$_POST['ta'];
  $chk2=$_POST['mobno'];
  $chk3=$_POST['dob'];
  $chk4=$_POST['email'];
  $chk5=$_SESSION['id'];
$count1=mysqli_query($conn,"update customer set name='$chk',address='$chk1',mobile_no='$chk2',dob='$chk3',email='$chk4' where id='$chk5' ");

if($count1)
{
	
    echo '<script language="javascript">';
  echo 'if(confirm("your details is sucessfully Updated")){window.location.href = "third.php";} ';
  echo '</script>';
}

}
mysqli_close($conn);
?>