<?php
include('library.php'); 
if ($_SERVER["REQUEST_METHOD"] != "POST") {
	header("Location:index.php");
}
$redirect = "";
if (basename($_SERVER["HTTP_REFERER"]) == "confirmation.php") {
	$to = $_POST["email"];
	$subject = ORDER_CONFIRMATION;
	$message = '<!DOCTYPE html><html lang="en">';
	$message .= '<body style="background-color:#F8F8F4;">';
    $message .= '<div style="width:700px; margin-left:auto; margin-right:auto; padding-left: 0px; padding-right: 0px; padding-top:0px; padding-bottom:0px; border: 1px solid #D3D3D3;">';
    $message .= '<div><img src="http://www.fswinemaker.com/img/email_banner.jpg"></div>';
    $message .= '<div><br><font face="georgia, serif">';
    $message .= '<div style="font-size: 12px; margin-left:auto; margin-right:auto; text-align:center;">';
    $message .= '<br><address>| ' . FOURSONS_ADDRESS1 . ', ' . FOURSONS_ADDRESS2 . ' | ' . FOURSONS_PHONE. ' |<br></address></div>';
    $message .= '<div style="text-align: center; width:700px; margin-left:auto; margin-right:auto; padding-left: 0px; padding-right: 0px; padding-top:5px; padding-bottom:5px; background-color: #f6f6f6">';
    $message .= '<h2>Your appointment is confirmed</h2></div>';
    $message .= '<div style="font-size: 12px; padding-left: 40px; padding-right: 40px; padding-top:20px; padding-bottom:10px;">';
    $message .= 'Dear ' . $_POST["fullName"] . ', please review that the summary of your reservation below is correct!<br><br>';
    $message .= '<hr style="width:50%; color:#D3D3D3;"><br><br>';
    $message .= '<table border="0" width="100%">';
    $message .= '<tr><td width="30%" align="right" cellspacing="10px"><strong>Wine Ordered</strong></td>';
    $message .= '<td width="20%">&nbsp;</td>';
    $message .= '<td width="50%" align="left" cellspacing="10px">' . $_POST["wine"] . '</td>';
    $message .= '</tr>';
    $message .= '<tr><td width="30%" align="right" cellspacing="10px"><strong>Date &amp; Time</strong></td>';
    $message .= '<td width="20%">&nbsp;</td>';
    $message .= '<td width="50%" align="left" cellspacing="10px">' . $_POST["date"] . " " . $_POST["time"] . '</td>';
    $message .= '</tr>';
    $message .= '<tr><td width="30%" align="right" cellspacing="10px"><strong>Comments</strong></td>';
    $message .= '<td width="20%">&nbsp;</td>';
    $message .= '<td width="50%" align="left" cellspacing="10px">';
    if ($_POST["comment"]) {
		$message .= $_POST["comment"];
	}
	$message .= '</td>';
    $message .= '</tr></table>';
    $message .= '<br><br>';
    $message .= '<hr style="width:50%; color:#D3D3D3;"><br>';
    $message .= 'Thank you for choosing the <strong>' . TITLE . '</strong>!<br><br>';
    $message .= 'Your first visit will take less than 10 minutes. On your first visit you will add the yeast to your grape juice (required by government regulations).<br><br>';
    $message .= 'Please bring your identification with you on your visit. Also, you will be asked if you will be bringing your own bottles or you would like to purchase the bottles at $1 each.<br><br>';
    $message .= 'Labels, corks, and decorative caps for your bottles are included in the package, but you are welcome to bring in your own to make it more personal.<br><br>';
    $message .= 'We look forward to meeting you!<br><br><br>';
    $message .= '</div></font></div></div></body></html>';

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "From: " . FOURSONS_EMAIL . "\r\n";
	$headers .= "Reply-To: " . FOURSONS_EMAIL . "\r\n";
	mail($to, $subject, $message, $headers);
	$OrderTo = FOURSONS_EMAIL;
	$OrderSubject = ORDER_SUBJECT . " from " . $_POST["fullName"];
	$OrderMessage = "Order details:\n\n\n";
	$OrderMessage .= "Customer Name : " . $_POST["fullName"] . "\n";
	$OrderMessage .= "Phone Number : " . $_POST["phone"] . "\n";
	$OrderMessage .= "Wine Ordered : " . $_POST["wine"] . "\n";
	$OrderMessage .= "Drop In Date : " . $_POST["date"] . " " . $_POST["time"] . "\n";
	$OrderMessage .= "Additional Comments : ";
	if ($_POST["comment"]) {
		$OrderMessage .= $_POST["comment"];
	}
	$OrderMessage .= "\n";
	$OrderFrom = FOURSONS_EMAIL;
	$OrderHeaders = "From: " . $OrderFrom . "\r\n";
	mail($OrderTo, $OrderSubject, $OrderMessage, $OrderHeaders);

	$redirect = "reserved.php?email=" . $_POST["email"];

} elseif (basename($_SERVER["HTTP_REFERER"]) == "contactus.php") {

	$to = $_POST["email"] . ', ' . FOURSONS_EMAIL;
    if ($_POST["subject"] == "gen") {
		$subject = CUSTOMER_SUB1;
	} elseif($_POST["subject"] == "sug") {
		$subject = CUSTOMER_SUB2;
	} elseif($_POST["subject"] == "prod") {
		$subject = CUSTOMER_SUB3;
	}
	$message = '<!DOCTYPE html><html lang="en">';
	$message .= '<body style="background-color:#F8F8F4;">';
    $message .= '<div style="width:700px; margin-left:auto; margin-right:auto; padding-left: 0px; padding-right: 0px; padding-top:0px; padding-bottom:0px; border: 1px solid #D3D3D3;">';
    $message .= '<div><img src="http://www.fswinemaker.com/img/email_banner.jpg"></div>';
    $message .= '<div><br><font face="georgia, serif">';
    $message .= '<div style="font-size: 12px; margin-left:auto; margin-right:auto; text-align:center;">';
    $message .= '<br><address>| ' . FOURSONS_ADDRESS1 . ', ' . FOURSONS_ADDRESS2 . ' | ' . FOURSONS_PHONE. ' |<br></address></div>';
	$message .= '<div style="text-align: center; width:700px; margin-left:auto; margin-right:auto; padding-left: 0px; padding-right: 0px; padding-top:5px; padding-bottom:5px; background-color: #f6f6f6">';
    $message .= '<h2>Your message has been submitted</h2></div>';
    $message .= '<div style="font-size: 12px; padding-left: 40px; padding-right: 40px; padding-top:20px; padding-bottom:10px;">';
    $message .= 'Dear ' . $_POST["fName"] . ' ' . $_POST["lName"] . ', thank you for contacting us! Your feedback is very important to us.<br><br>';
    if ($_POST["reply"]) {
        $message .= 'If you have asked us to contact you, we will do try to respond back within 48 hours, so please sit back, pour yourself a glass of wine and relax.<br><br>';
        $message .= 'If you do not hear from us, simply call us or forward this email to ' . FOURSONS_EMAIL . '.<br><br>';
    }
    $message .= '<hr style="width:50%; color:#D3D3D3;"><br><br>';
    $message .= 'Here is your message : <br><br>';
    $message .= '<div style="font-size: 12px; padding-left: 40px; padding-right: 40px; padding-top:20px; padding-bottom:10px;">';
    $message .= $_POST["message"];
    $message .= '</div></div><br><br></body>';

	$headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "From: " . FOURSONS_EMAIL . "\r\n";
    $headers .= "Reply-To: " . FOURSONS_EMAIL . "\r\n";

    $sent = mail($to,$subject,$message,$headers);
	$redirect = "contacted.php";
}

header("Location: " . $redirect);
?>