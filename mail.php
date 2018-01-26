<?php

$to = "piskunovigorm@gmail.com";
$subject = "Sushi Master Franchise";
$txt = "Hello world!";

$headers = array(
  'From: "Sushi Master Franchise" <support@sushi-master-franchise.com>' ,
  'Reply-To: "Sushi Master Franchise" <support@sushi-master-franchise.com>' ,
  'X-Mailer: PHP/' . phpversion() ,
  'MIME-Version: 1.0' ,
  'Content-type: text/html; charset=iso-8859-1'
);
$headers = implode( "\r\n" , $headers );

mail($to,$subject,$txt,$headers);
?>