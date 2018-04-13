<?php
    $servername="localhost";
	$username="root";
	$pwd="";
	$conn=mysqli_connect($servername,$username,$pwd);
	if(!$conn)
		die('Could not connect'.mysqli_error());
	mysqli_select_db($conn,"event");
    $sql1="create trigger del after delete on venue for each row delete from booking where name=venue.name";
    mysqli_query($conn,$sql1);
    if(isset($_POST['del']))
    {
    	$var=$_POST['vname'];
    	$sql2="delete from venue where name='$var'";
    	mysqli_query($conn,$sql2);
    }
?>