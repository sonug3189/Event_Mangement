<?php 
$conn=mysqli_connect("localhost","root","");
if(!$conn)
	echo mysqli_error();

mysqli_select_db($conn,"event");
//$chk=NULL;$chk1=NULL;
if(isset($_POST['submit1']))
{ 
	$chk=$_POST['bname'];
	$chk1=$_POST['dropdown4'];
  $chk2=$_POST['dropdown5'];
  $chk3=$_POST['guestsno'];
  $chk4=$_POST['date1'];

$result=mysqli_query($conn,"CALL book('$chk','$chk2','$chk3','$chk4','$chk1')");
if($result)
{
	 echo '<script language="javascript">';
  echo 'if(confirm("your event book is  successfully")){window.location.href = "third.php";} ';
  echo '</script>';


}
else
   {
  echo '<script language="javascript">';
  echo 'if(confirm("your event book is not successfully")){window.location.href = "third.php";} ';
  echo '</script>';
   }
 }
mysqli_close($conn);
?>