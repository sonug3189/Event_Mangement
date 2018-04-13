<?php 
//session_start();
$conn=mysqli_connect("localhost","root","");
if(!$conn)
	echo mysqli_error();

mysqli_select_db($conn,"event");
$chk=NULL;$chk1=NULL;
if(isset($_POST['submit2']))
{ 
  $chk1=$_POST['name3'];
  $chk2=$_POST['email3'];
	$chk3=$_POST['FeedBack'];

//echo $chk1,$chk2,$chk3;
  $count=mysqli_query($conn,"Insert into feedback(Name,Email,feedback) values('$chk1','$chk2','$chk3')");
if($count)
{
	  echo '<script language="javascript">';
  echo 'if(confirm("feedback is added successfully")){window.location.href = "third.php";} ';
  echo '</script>';

}
else
   {
  echo '<script language="javascript">';
  echo 'if(confirm("feedback is added successfully")){window.location.href = "third.php";} ';
  echo '</script>';
   }
}
mysqli_close($conn);
?>