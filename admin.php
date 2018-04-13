
<?php 
	session_start();

$conn=mysqli_connect("localhost","root","");
if(!$conn)
	echo mysqli_error();
//else
	//echo "successfully connected"."<br>"."<br>";
mysqli_select_db($conn,"event");

$chk=NULL;$chk1=NULL; $chk2=NULL;
if(isset($_POST['submit']))
{	
	$chk=$_POST['user'];
	$chk1=$_POST['Password'];
	$chk2=$_POST['name'];
$result=mysqli_query($conn,"select * from admin where BINARY email= BINARY '$chk' AND BINARY pwd= BINARY '$chk1' AND BINARY name=BINARY '$chk2' ");
$count=mysqli_num_rows($result);
$count1=mysqli_fetch_array($result);
if($count)
{
   
    $_SESSION['admin']=$count1['name'];
	header("Location:fourth.php");
	 
	 
}
else{
echo '<script language="javascript">';
echo 'if(confirm("Invalid Password")){window.location.href = "newform2.html";} ';
echo '</script>';


}}
mysqli_close($conn);

?>