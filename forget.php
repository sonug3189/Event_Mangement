<!DOCTYPE html>
<html>
<head>
      <title>DBMS</title>
 <link rel="icon" href="event-wale.png">
   <style type="text/css">
    body
    {
      margin: 0;
      padding: 0;
      background:url("bgl.jpg");
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    .main
    {
      width: 35%;
      height: 400px;
      margin-top: 80px;
      border-radius: 20px;
      background-color:#DCDCDC;
      opacity:0.5;

    }
#admin
{
  text-align: center;
  color: black;
  font-size: 20px;
  margin-top: -25px;
  
}

   </style>
</head>
<body>
      <div class="main">
          <div id="admin">
         <h2 style="padding-top: 40px;">CREATE NEW PASSWORD</h2><br>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Email-id: <input type="Email-id" name="email" required><br><br>
        <button name="submit"  onclick="">Submit</button>
        <button>Cancel</button>
        </form>
    </div>
       
</div>
</body>
</html>



<?php
if($_SERVER['REQUEST_METHOD']=="POST"){ 
$conn=mysqli_connect("localhost","root","");
if(!$conn)
  echo mysqli_error();
mysqli_select_db($conn,"event");

$chk=NULL;$chk1=NULL; $chk2=NULL;
//include('db_connect.php');
// To Get New Password Mail New password to user and store new password into database
if(isset($_POST['submit']))
{ 
$username=$_POST['email'];
$query1="select email from customer where email='$username' ";
$result1=mysqli_query($conn,$query1);
 $count=mysqli_num_rows($result1);
if($count>=1)
{

        function random_password($length) 
         {
     $characters = "!@#$%^&*()?abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
     $size = strlen( $characters );
     $password="1@a";
     for( $i = 0; $i < $length-3; $i++ ) 
     {
     $password .= $characters[ rand( 0, $size - 1 ) ];
     }
 
 return $password;
 
}
 $password1 = random_password(8);

mysqli_query($conn,"update customer set pwd='$password1' where email='$username'");
$subject="New password";
$message="Your New Password is : '$password1' ";
/*
require 'vendor/autoload.php';
$sendgrid = new SendGrid("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");
$email    = new SendGrid\Email();

$email->addTo("sonug3189@gmail.com")
      ->setFrom("sonug3189@gmail.com")
      ->setSubject($subject)
      ->setHtml($message);

$sendgrid->send($email);
*/
$url="https://api.sendgrid.com";
$params = array(
      'api_user' => "sonug3189",
      'api_key' =>"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 ",
      'to' => "sonug3189gmail.com",
      'subject' => $subject,
      'html' => $message,
      'from' => "sonug3189gmail.com",
      'fromname' => 'sonu kumar gupta',
           );

  $request = $url.'api/mail.send.json';

  // Generate curl request
  $session = curl_init($request);

  // Tell curl to use HTTP POST
  curl_setopt ($session, CURLOPT_POST, true);

  // Tell curl that this is the body of the POST
  curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

  // Tell curl not to return headers, but do return the response
  curl_setopt($session, CURLOPT_HEADER, false);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

  // obtain response

  $response = json_decode( curl_exec($session) );
  curl_close($session);
  return 1;
/*
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail= new PHPMailer();

$mail->isSmtp();
$mail->Host="smtp.gmail.com";
$mail->Username="sonug3189@gmail.com";
$mail->Password="9982777518";
$mail->Port='465';
$mail->SMTPSecure='ssl';
$mail->SMTPAuth=true;
$mail->isHTML(true);

$mail->SetFrom("sonug3189@gmail.com");
$mail->addAddress($username);

$mail->Subject=$subject;
$mail->Body=$message;
*/



}
}
}
?>


