<?php
$sessionId=$_POST['sessionId'];
$serviceCode=$_POST['serviceCode'];
$phoneNumber=$_POST['phoneNumber'];
$text=$_POST['text'];

if ($text == ""){
	$response="CON What would you want to check \n";
	$response .="1. My Account No \n";
	$response .="2. My phone Number";
}

else if ($text == "1") {
	# business login for the first level response
	$response = "CON Choose account information you want to view \n";
	$response .= "1. Account Number \n";
	$response .= "2. Account Balance";
}

else if ($text == "2") {
	$response = "END You phone number is ".$phoneNumber;

	# code...
} else if($text == "1*1"){
	$accountNumber = "ACC1001";

	$response = "END Your account Number is ".$accountNumber;


}
else if ($text == "1*2") {
	$balance = "KES 10,000";
	# code...
	$response= "END Your balance is ".$balance;
}

header('Content-type: text/plain');
echo $response;


?>