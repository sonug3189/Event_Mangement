<?php
	$servername="localhost";
	$username="root";
	$pwd="";
	$conn=mysqli_connect($servername,$username,$pwd);
	if(!$conn)
		die('Could not connect'.mysql_error());
	mysqli_select_db($conn,'event');
	$result=mysqli_query($conn,"select name from venue where type='Birthday'");

echo "<table border='1'>
<tr>
<th>Venues</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($conn);
?>