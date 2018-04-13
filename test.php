<?php
echo "hi";
$url="https://api.sendgrid.com";
$params = array(
      'api_user' => "sonug3189",
      // 'api_key' =>"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 ?",
      'api_key'=>"Sonu#1996",
      'to' => "sonug3189gmail.com",
      'subject' => "hello",
      'html' => "ghvjhxc hs sdbcsdcsbd ",
      'from' => "sonug3189gmail.com",
      'fromname' => 'sonu kumar gupta',
           );

  $request = $url.'api/mail.send.json';

  // Generate curl request
  $session = curl_init($request);
  // echo($session);
  // Tell curl to use HTTP POST
  curl_setopt ($session, CURLOPT_POST, true);

  // Tell curl that this is the body of the POST
  curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

  // Tell curl not to return headers, but do return the response
  curl_setopt($session, CURLOPT_HEADER, false);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

  // obtain response

  $response = json_decode( curl_exec($session) );
  echo($response);
  echo("123");
  curl_close($session);
?>