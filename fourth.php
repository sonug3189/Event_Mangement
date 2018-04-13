<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>DBMS</title>
 <link rel="icon" href="event-wale.png">
   <meta charset="utf-8">
  <link rel="stylesheet"  href="animate.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
body
  {
      position: relative; 
      margin: 0;
      padding: 0;
  }
 .affix {
      top: 0;
      width: 100%;
      z-index: 9999 !important;
      }
 
#event
{
  width: 100%;
  height: 300px;
  background: no-repeat;
}
#header1
{
width:100%;
height:120px;
background-color:red;
text-align: center;

}
.shaded
{
    
	width: 100%;
	 height: 700px; 
	 border: 10px solid black;
	 background-image: url(bg1.jpg);

}
#add_venue
{
  text-align: center;
  display: none;
  color: black;
  font-family: "comic sans MS";
  font-size: 20px;
  margin-top: 20px;
}
#del
{
  text-align: center;
  display: none;
  color: black;
  font-family: "comic sans MS";
  font-size: 20px;
  margin-top: 20px;
}
#feedbackprint
{
  margin-top: 100px;
  margin-left: 450px;
  color: white;
  display: none;
  border-style:  4px solid black;
}
#viewbook
{
  margin-top: 100px;
  margin-left: 300px;
  color: white;
  display: none;
  border-style:  4px solid black;
}
table
{
  font-size: 60px;

}
th
{
  color: darkblue;
}
table,th,tr,td
{
  border: 7px solid lightpink;
  text-align: center;
  font-size: 30px;
}

</style>

<script type="text/javascript">
   function add_venue()
   {
    document.getElementById('add_venue').style.display="block";
    document.getElementById('feedbackprint').style.display="none";
    document.getElementById('viewbook').style.display="none";
   }
     function logout()
   {
    alert("you account is sucessfully logout");
   }
   function feedbackprint()
   {
       document.getElementById('add_venue').style.display="none";
     document.getElementById('feedbackprint').style.display="block";
     document.getElementById('viewbook').style.display="none";
   }
   function viewbook()
   {

      document.getElementById('add_venue').style.display="none";
     document.getElementById('feedbackprint').style.display="none";
     document.getElementById('viewbook').style.display="block";

   }

</script>
</head>


<div>
  <img src="event.jpg" id="event">
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="font-size: 25px;">Event Management</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li style="padding-left:180px; font-size: 22px;"><a href="#" onclick="add_venue()">Add Venue</a></li>
         
          <!-- <li style="padding-left:45px; font-size: 22px;"><a href="#" onclick="">New Booking </a></li>
 -->          <li style="padding-left:45px; font-size: 22px;"><a href="#" onclick="viewbook()"> View Booking </a></li>
          <li style="padding-left:45px; font-size: 22px;"><a href="#" onclick="feedbackprint()"> View FeedBack</a></li>
          <li style="padding-left:95px; font-size: 22px;"><a href="logout.php" onclick="logout()">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div style="width: 100%; height: 30px; margin-top: -20px; background-color: red;">
<h3 class="animated lightSpeedIn" style="text-align: center;">********Welcome <?php echo $_SESSION['admin']; ?> **********</h3>
</div>    
<div class="shaded">
        <form action="adminupdate.php" method="POST">
         <div id="add_venue">
        <h1> ADD VENUE</h1><br>
        Venue Name :  <input type="text" name="vname"><br><br>
        Venue address :  <input type="text" name="vdname"><br><br>
        Venue phone no :  <input type="text" name="vpname"><br><br>
        Capacity :  <input type="text" name="cname"><br><br>
        Event Type : 
         <select name="dropdown1" value=select >
       <option  value="marriage">Marriage</option>
       <option  value="Birthday">Birthday Party</option>
       <option value="Anniversary">Anniversary Party</option>
       <option value="Friends">New Year Party</option>
       <option value="Farewell">Farewell Party</option>
       </select><br><br>
        Price : <input type="text" name="rname"><br><br>
        <button name="add">ADD</button>
        </form>
    </div> 

  <form action="delete.php" method="POST">
    <div id="del">
       <h2>EVENT TYPE</h2><br>
         <select name="etype" value=select >
       <option  value="Marriage">Marriage</option>
       <option  value="Birthday">Birthday Party</option>
       <option value="Anniversary">Anniversary Party</option>
       <option value="Friends">New Year Party</option>
       <option value="Farewell">Farewell Party</option>
       </select><br><br>
       <h2>VENUE NAME</h2>
         <select name="vname" value="select" >select
          <option></option>
       </select><br><br>
       </form>
</div>


  <div id="viewbook">   
    <h1 style="padding: 20px; padding-left: 300px; color: #20B2AA" >BOOKING</h1>
    <?php
  $conn=mysqli_connect("localhost","root","");
  if(!$conn)
    die('Could not connect'.mysql_error());

 mysqli_select_db($conn,"event");
// $res=mysqli_query($conn,"call feed1()");
// if(!$res)
//  {
//    die('Could not call procedure'.mysql_error());
//  }
$res=mysqli_query($conn,"select * from booking");
echo "<table border='1'>
<tr>
<th>id</th><th>Booking_id</th><th>Place</th><th>No_Of_Guests</th><th>Date</th><th>Type</th>
</tr>";

while($row=mysqli_fetch_array($res))
  {
  echo "<tr>";
  echo  "<td>".$row['id']."</td>";
  echo  "<td>" . $row['booking_id'] . "</td>";
  echo  "<td>" . $row['place'] . "</td>";
  echo  "<td>" . $row['no_of_guests'] . "</td>";
  echo  "<td>".$row['date']."</td>";
  echo  "<td>" . $row['type'] . "</td>";
  echo  "</tr>";
  }
echo "</table>";
mysqli_close($conn);
?>

</div>

  <div id="feedbackprint">   
    <h1 style="padding: 20px; padding-left: 200px; color: #20B2AA" >FEEDBACK</h1>
    <?php
  $conn=mysqli_connect("localhost","root","");
  if(!$conn)
    die('Could not connect'.mysql_error());

 mysqli_select_db($conn,"event");
// $res=mysqli_query($conn,"call feed1()");
// if(!$res)
//  {
//    die('Could not call procedure'.mysql_error());
//  }
$res=mysqli_query($conn,"select * from feedback");
echo "<table border='1'>
<tr>
<th>S.No</th><th>Name</th><th>Email</th><th>FeedBack</th>
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
</div>
</div>
</body>
</html>
