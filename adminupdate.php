<?php
$servername="localhost";
	$username="root";
	$pwd="";
	$conn=mysqli_connect($servername,$username,$pwd);
	if(!$conn)
		die('Could not connect'.mysqli_error());
	mysqli_select_db($conn,"event");

	if(isset($_POST['add']))
	{




		$a=$_POST['vname'];
		$a1=$_POST['vdname'];
		$a2=$_POST['vpname'];
		$b=$_POST['cname'];
		$c=$_POST['dropdown1'];
		$d=$_POST['rname'];
		
			$res=mysqli_query($conn,"insert into venue(name,address,phone_no,capacity,type,price) values('$a','$a1','$a2','$b','$c','$d')");
			if($res)
				{
					  echo '<script language="javascript">';
                      echo 'if(confirm("data successfully inserted")){window.location.href = "fourth.php";} ';
                      echo '</script>';
				}
			else
			{
				echo "not inserted".mysql_error();
			}
		
	}
mysqli_close($conn);
?>