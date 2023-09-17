<?php 
// $servername = "localhost";
// $username = "utfkzo7uz3zm2";
// $password = "5fo+5n55y<2%";
// $dbname = "db424oebkkcaud";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
$email = $_REQUEST['email'];


if ($email) {
 $to = $email;
 $subject = "Streetcommunication Subscriber";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@streetcommunication.ch>' . "\r\n";
mail($to,$subject,'Thanks, you are subcribed with this email '.$email.' to Streetcommunication website',$headers);
  $fp = fopen('subscribe.txt', 'a');
  fwrite($fp, $email."\n");
  fclose($fp);
  header("location:index.php?success");
}

?>