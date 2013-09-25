<?php
include('library.php'); 
if ($_SERVER["REQUEST_METHOD"] != "POST") {
	header("Location:index.php");
}

$redirect = "";
if (basename($_SERVER["HTTP_REFERER"]) == "confirmation.php") {
	$to = $_POST["email"];
	$subject = ORDER_CONFIRMATION;
	$message = "Thank you for ordering at Foursons Winemaker.\n\n";
	$message .= "Detailed Information On Your Order\n";
	$message .= "==================================\n\n";
	$message .= "Customer Name : " . $_POST["fullName"] . "\n";
	$message .= "Phone Number : " . $_POST["phoneNum"] . "\n";
	$message .= "Address : \n" . $_POST["address"] . "\n";
	if (isset($_POST["address2"]) && !empty($_POST["address2"])) {
		$message .= $_POST["address2"] . "\n";
	}
	$message .= $_POST["city"] . ", " . $_POST["province"] . ", " . $_POST["postal"] . "\n\n";
	$message .= "Wine Ordered : " . $_POST["wine"] . "\n";
	$message .= "Drop In Date : " . $_POST["date"] . " " . $_POST["time"] . "\n";

	$message .= "If you have any questions or concerns regarding your orders, do not hesitate to call us (647) 847-6977 or email us at " . FOURSONS_EMAIL . ".\n\n\n";
	$message .= TITLE . "\n";
	$message .= FOURSONS_ADDRESS1 . "\n" . FOURSONS_ADDRESS2;

	$from = FOURSONS_EMAIL;
	$headers = "From: " . $from . "\r\n";
	mail($to, $subject, $message, $headers);
	$OrderTo = FOURSONS_EMAIL;
	$OrderSubject = ORDER_SUBJECT;
	$OrderMssage = "You received a new order.\n\nOrder details:\n\n\n";
	$OrderMessage .= "Name : " . $_POST["fullName"] . "\n";
	$OrderMessage .= "Phone Number : " . $_POST["phoneNum"] . "\n";
	$OrderMessage .= "Address : \n" . $_POST["address"] . "\n";
	if (isset($_POST["address2"]) && !empty($_POST["address2"])) {
		$OrderMessage .= $_POST["address2"] . "\n";
	}
	$OrderMessage .= $_POST["city"] . ", " . $_POST["province"] . ", " . $_POST["postal"] . "\n\n";
	$OrderMessage .= "Wine Ordered : " . $_POST["wine"] . "\n";
	$OrderMessage .= "Drop In Date : " . $_POST["date"] . " " . $_POST["time"] . "\n";

	$OrderFrom = FOURSONS_EMAIL;
	$OrderHeaders = "From: " . $OrderFrom . "\r\n";
	mail($OrderTo, $OrderSubject, $OrderMessage, $OrderHeaders);

	$redirect = "reserved.php";
} elseif (basename($_SERVER["HTTP_REFERER"]) == "contact.php") {
	$to = FOURSONS_EMAIL;
	if ($_POST["subject"] == "gen") {
		$subject = CUSTOMER_SUB1;
	} elseif($_POST["subject"] == "sug") {
		$subject = CUSTOMER_SUB2;
	} elseif($_POST["subject"] == "prod") {
		$subject = CUSTOMER_SUB3;
	}
	$subject .= " " . $_POST["fName"] . " " . $_POST["lName"];
	$message = $_POST["message"];
	$from = $_POST["email"];
	$headers = "From: " . $from . "\r\n";
	$sent = mail($to,$subject,$message,$headers);
	$redirect = "contacted.php";
}

header("Location: " . $redirect);
?>