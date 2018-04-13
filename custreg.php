<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn)
    echo mysqli_error();
$result=mysqli_select_db($conn,"event");
$x=0;
if(!$result)
	echo "No database selected<br>";
if(isset($_POST['name']))
  $b=$_POST['name'];
if(isset($_POST['ta']))
  $c=$_POST['ta'];
if(isset($_POST['mobno']))
  $d=$_POST['mobno'];
if(isset($_POST['dob']))
  $e=$_POST['dob'];
if(isset($_POST['email']))
  $f=$_POST['email'];
if(isset($_POST['Password']))
  $g=$_POST['Password'];
if(isset($_POST['Password1']))
  $h=$_POST['Password1'];
 if(isset($_POST['submit']))
  {
    if(!preg_match('/^[0-9]{10}+$/', $d))
   	      { echo '<script language="javascript">';
        echo 'if(confirm("mobno not valid")){window.location.href = "newform3.html";} ';
        echo '</script>';
        $x=1;}
     if(!preg_match("/^[a-zA-Z]+$/",$b))
		       { echo '<script language="javascript">';
        echo 'if(confirm("name not valid")){window.location.href = "newform3.html";} ';
        echo '</script>';
        $x=1;}
	  if(!preg_match("/[a-zA-Z0-9]+@[a-zA-Z]+\.[a-z]/",$f))
		        { echo '<script language="javascript">';
        echo 'if(confirm("email not valid")){window.location.href = "newform3.html";} ';
        echo '</script>';
        $x=1;}
     if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/',$g)) 
                  { echo '<script language="javascript">';
        echo 'if(confirm("Password must contain 6 characters of letters, numbers and at least one special character")){window.location.href = "newform3.html";} ';
        echo '</script>';
        $x=1;}
      
     if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/',$h)) 
                        { echo '<script language="javascript">';
        echo 'if(confirm("Password must contain 6 characters of letters, numbers and at least one special character")){window.location.href = "newform3.html";} ';
        echo '</script>';
        $x=1;}
        if($g!=$h)
                     { echo '<script language="javascript">';
        echo 'if(confirm("Password not matched")){window.location.href = "newform3.html";} ';
        echo '</script>';
        $x=1;}
    if($x==0)
    {
      $res=mysqli_query($conn,"Insert into customer(name,address,mobile_no,dob,email,pwd) values('$_POST[name]','$_POST[ta]','$_POST[mobno]','$_POST[dob]','$_POST[email]','$_POST[Password]')");
      if(!$res)
      echo "NOT INSERTED"."<br>";
  else
     {
            { echo '<script language="javascript">';
        echo 'if(confirm("Registration  sucessfully")){window.location.href = "fourth.php";} ';
        echo '</script>';
        $x=1;}

     }
  mysqli_close($conn);
    }
  }
?>