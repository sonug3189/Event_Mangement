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
  body {
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
margin:0;
text-align: center;

}
.shaded
{
    
	  width: 100%;
	 height: 700px; 
	 border: 10px solid lightblue;
	 background-image: url(bg1.jpg);

}

#em
{
	font-size: 50px;
	margin-left: 40px;
	font-family: 'Courgette', cursive;
	color:white;
}

#details
{
  text-align: center;
  font-size: 20px;
  padding-top: 60px;
  color: lightblue;
  display: none;
}
#view_venu
{
 text-align: center;
  font-size: 20px;
  color: lightblue; 
  display: none;
}
#book_event
{
  text-align: center;
  font-size: 20px;
  margin-top: 100px;
  color: lightblue;
  display: none;
 }
#book_event1
{
  
  font-size: 20px;
  color: lightgreen; 
  text-align: center;
  margin-top: 100px;
  margin-left: 400px;
  display: none;
  
}
#book_event2
{
  
  font-size: 20px;
  color: lightgreen; 
  display: none;
  text-align: center;
  margin-left: 400px;
  margin-top: 100px;
  
}
#book_event3
{
  
  font-size: 20px;
  color: lightgreen; 
  display: none;
  text-align: center;
  margin-left: 400px;
  margin-top: 100px;
  
}
#book_event4
{
  
  font-size: 20px;
  color: lightgreen; 
  display: none;
  text-align: center;
  margin-left: 400px;
  margin-top: 100px;
  
}
#book_event5
{
  
  font-size: 20px;
  color: lightgreen; 
  display: none;
  text-align: center;
  margin-left: 400px;
  margin-top: 100px;
  
}
#book_event6
{
  
  font-size: 20px;
  color: black; 
  display: none;
  height:700px;
  background-color: white;
  text-align: center;

  
}
#book_event7
{
  
  font-size: 20px;
  color: blue; 
  display: none;
  height:700px;
  margin-top: 100px; 
  background-color: white;
  text-align: center;

  
}
#feedback
{
  text-align: center;
  color: orange;
  font-size: 25px;
 display: none;
}
button,input
{
  color: blue;
}
</style>

</head>
<body>
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
          <li style="padding-left:190px; font-size: 22px;"><a href="#" onclick="details()">My Details</a></li>
          <li style="padding-left:65px; font-size: 22px;"><a href="#" onclick="book_event()">Book an Event</a></li>
          <!-- <li style="padding-left:35px; font-size: 22px;"><a href="#">Booking Status</a></li>
          <li style="padding-left:35px; font-size: 22px;"><a href="#">Booking History</a></li> -->
          <li style="padding-left:65px; font-size: 22px;"><a href="#" onclick="feedback1()">FeedBack</a></li>
          <li style="padding-left:95px; font-size: 22px;"><a href="logout.php" onclick="logout()">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div style="width: 100%; height: 30px; margin-top: -20px; background-color: red;">
<h3 class="" style="text-align: center;">********Welcome <?php  echo $_SESSION['abc1']; ?> **********</h3>
</div>    

<div class="shaded">
    <div id="details">
    <form method="POST" action="updatedet.php">
        <h1> My Details</h1><br>
        Name:<input type="text" name="name" value="<?php  echo $_SESSION['abc1']; ?>"><br><br>
        Address:<input type="text" name="ta" style="width: 250px; height: 60px;" value="<?php  echo $_SESSION['abc2']; ?>"><br><br>
        Mobile No:<input type="text" name="mobno"  value="<?php  echo $_SESSION['abc3']; ?>"><br><br>
        Date Of Birth:<input type="" name="dob" value="<?php  echo $_SESSION['abc4']; ?>"><br><br>
        Email:<input type="email" name="email"  value="<?php  echo $_SESSION['abc5']; ?>"><br><br><br>
        <button value="Update" name="Update">Update</button>
        <button>Cancel</button>
        </form>

    </div> 

    
    <div id="book_event">
  <form method="POST" action="book_event.php">

              <h1> BOOK VENUE</h1><br><br>
              Booking Id:<input type="text" name="bname" ><br><br>
         Event Type:
         <select name="dropdown4" value=select>
     <option  value="marriage">Marriage</option>
       <option  value="Birthday Party">Birthday Party</option>
       <option value="Anniversary Party">Anniversary Party</option>
       <option value="New Year Party">New Year Party</option>
       <option value="Farewell Party">Farewell Party</option>
            </select><br><br>
     Event Place:
        <select name="dropdown5" value=select>
       <option  value="Jaipur">Jaipur</option>
       <option  value="Dehli">Dehli</option>
       <option value="Noida">Noida</option>
       <option value="Ghaziabad">Ghaziabad</option>
       <option value="Faridabad">Faridabad</option>
     </select><br><br>
       No of Guest:<input type="text" name="guestsno" ><br><br>
        Date:<input type="Date" name="date1" ><br><br>
     <!--  <input type="button" name="submit1" id="submit1" value="submit"> -->
      <button name="submit1">submit</button>
   
 </form>
 </div>

    <div id="feedback">
        <form method="POST" action="feedback.php">
           <h1>Your Feedback is valuable to us</h1><br>
            Name:<input type="text" name="name3" placeholder="enter the registered Name"><br><br>
            Email:<input type="text" name="email3" placeholder="enter the registered Email"><br><br>
           Feedback:<br><textarea style="width: 250px; height: 100px;" name="FeedBack"></textarea><br><br>
           <button type="submit" name="submit2" value="submit2">Submit</button>
        </form>
       </div>

<!-- <div id="book_event1">
  <form>
       <h2> Equipment</h2><br><br>
       <input type="checkbox" name="">DJ
       <input type="checkbox" name="">Stage
       <input type="checkbox" name="">Mike and Speaker<br><br>
       <button  onclick="book_event2()">Next</button>
   </form>
  </div>

    
   <div id="book_event2">
     <form>
       <h2> Food</h2><br><br>
       <input type="checkbox" name="">BreakFast
       <input type="checkbox" name="">Lunch
       <input type="checkbox" name="">Tea & Snacks
       <input type="checkbox" name="">Dinner<br><br>
       <input type="radio" name="">Only Veg
       <input type="radio" name="">Ved and Non Veg<br><br>
       <button onclick="book_event3()">Next</button>
       </form>
    </div>

       
  <div id="book_event3">
      <form>
       <h2> Decoration </h2><br><br>
           Lightings:
         <select name="dropdown1" >
       <option  value="NO" selected="NO">NO</option>
       <option  value="normal">Normal</option>
       <option  value="royal">Royal</option>
       <option  value="delux">Delux</option>
      </select><br><br>
          Flowers:
         <select name="dropdown1" >
       <option  value="NO" selected="NO">NO</option>
       <option  value="normal">Normal</option>
       <option  value="royal">Royal</option>
       <option  value="delux">Delux</option>
      </select><br><br>
                 Seating:
         <select name="dropdown1" >
       <option  value="chair">Chair</option>
       <option  value="chso">Chair & Sofa</option>
       <option  value="sofa">Sofa</option>
      </select><br><br>
       <button onclick="book_event4()">Calculate</button>
       </form>
   </div>
  
   <div id="book_event4">
   <form>
     Total:-<input type="text" name="total"> &nbsp;&nbsp;&nbsp;&nbsp;**This is Approx Cost<br><br>
     <button onclick="book_event5()">Submit</button>
     </form>
   </div>
   <div id="book_event5">
     <button onclick="book_event6()" >Payment</button>
   </div>
   </form>
   <form>
   <div id="book_event6">
      Card No:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cname"><br><br>
      CVV no:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name=""><br><br>
      Name of Card:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name=""><br><br>
      Expiration<br>
      MM/YYYY &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name=""><br><br>
      <button onclick="book_event7()">Pay</button>
   </div>
  </form>
  <form>
   <div id="book_event7">
       <h2>complete bill event</h2>
       <h2>---------------------------------------------------------------------------------------------------------------------------------</h2>
        Bill no  &nbsp;&nbsp;&nbsp;&nbsp;     Function name  &nbsp;&nbsp;&nbsp;&nbsp;     No of guest  &nbsp;&nbsp;&nbsp;&nbsp;     Items    &nbsp;&nbsp;&nbsp;&nbsp;       cost      &nbsp;&nbsp;&nbsp;&nbsp;              total cost
        <h2>---------------------------------------------------------------------------------------------------------------------------------</h2>

        <a href="third.php"><--HOME</a>
     </div>
      -->
    
     </div>



 <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script type="text/javascript">
 function details()
 {
  document.getElementById('details').style.display="block"; 
   document.getElementById('book_event').style.display="none";
    document.getElementById('feedback').style.display="none";

 }

  function book_event()
  {
    document.getElementById('book_event').style.display="block";
    document.getElementById('details').style.display="none"; 
    document.getElementById('feedback').style.display="none"
    document.getElementById('view_venu').style.display="none";
  }

  $("#submit1").click(function(e){
    e.preventDefault();
    console.log("h");
    document.getElementById('book_event').style.display="none";
    if($("#book_event").is(":visible")){
      console.log("Im here");
    }else{
      console.log("p");
    }
    document.getElementById('book_event1').style.display="block";
    if($("#book_event1").is(":visible")){
      console.log("Im not here");
    }
    else{
      console.log("m");
    }
  });
  //   function book_event1()
  // { 
  //   console.log("h");
  //   document.getElementById('book_event').style.display="none";
  //   if($("#book_event").is(":visible")){
  //     console.log("Im here");
  //   }else{
  //     console.log("p");
  //   }
  //   document.getElementById('book_event1').style.display="block";
  //   if($("#book_event1").is(":visible")){
  //     console.log("Im not here");
  //   }
  //   else{
  //     console.log("m");
  //   }
   
  // }
    function book_event2()
  { 
   
  document.getElementById('book_event1').style.display="none";
  document.getElementById('book_event2').style.display="block";
  }
      function book_event3()
  { 
   
  document.getElementById('book_event2').style.display="none";
  document.getElementById('book_event3').style.display="block";
  }
       function book_event4()
  { 
   
  document.getElementById('book_event').style.display="none";
  document.getElementById('book_event3').style.display="none";
  document.getElementById('book_event4').style.display="block";
  }
         function book_event5()
  { 
   
  document.getElementById('book_event').style.display="none";
  document.getElementById('book_event4').style.display="block";
  alert("your event is sent for approval");
  document.getElementById('book_event5').style.display="block";
  }
          function book_event6()
  { 
  document.getElementById('book_event').style.display="none";
  document.getElementById('book_event4').style.display="none";
  document.getElementById('book_event5').style.display="none";
   document.getElementById('book_event6').style.display="block";
  }
     function book_event7()
  { 

   document.getElementById('book_event6').style.display="none";
   document.getElementById('book_event7').style.display="block";
  }
   function feedback1()
   {

    document.getElementById('feedback').style.display="block";
    document.getElementById('details').style.display="none";
    document.getElementById('book_event').style.display="none";
    document.getElementById('view_venu').style.display="none";
   }
   function logout()
   {
    alert("you account is sucessfully logout");
   }
</script>
</body>
</html>
