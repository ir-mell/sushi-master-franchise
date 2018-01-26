<?php

header("Access-Control-Allow-Origin: *");

try{
	$to = "support@sushi-master-franchise.com";
	$subject = $_POST['clientName']." - звонок Sushi Master Franchise";

	$txt = "Клиент: ".$_POST['clientName']."<br>".
		   "Город: ".$_POST['clientCity']."<br>".
		   "Телефон: ".$_POST['clientPhone'];

	$headers = array(
	  'From: "Sushi Master Franchise" <support@sushi-master-franchise.com>' ,
	  'Reply-To: "Sushi Master Franchise" <support@sushi-master-franchise.com>' ,
	  'X-Mailer: PHP/' . phpversion() ,
	  'MIME-Version: 1.0' ,
	  'Content-type: text/html; charset=iso-8859-1'
	);
	$headers = implode( "\r\n" , $headers );

	mail($to,$subject,$txt,$headers);

	echo '{ "status": 1 }';

} catch(Excetion $e){
	echo '{ "status": 0 }';
}

?>