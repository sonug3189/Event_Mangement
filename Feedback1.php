<?php
	$conn=mysqli_connect("localhost","root","");
	if(!$conn)
		die('Could not connect'.mysql_error());

 mysqli_select_db($conn,"event");
// $res=mysqli_query($conn,"call feed1()");
// if(!$res)
// 	{
// 		die('Could not call procedure'.mysql_error());
// 	}
$res=mysqli_query($conn,"select * from feedback");
echo "<table border='1'>
<tr>
<th>Venues</th>
</tr>";

while($row=mysqli_fetch_array($res))
  {
  echo "<tr>";
  echo  "<td>".$row['S.No']."</td>";
  echo  "<td>" . $row['Name'] . "</td>";
  echo  "<td>" . $row['Email'] . "</td>";
  echo  "<td>" . $row['feedback'] . "</td>";
  echo  "</tr>";
  }
echo "</table>";
mysqli_close($conn);
?>