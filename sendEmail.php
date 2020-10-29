<?php

include './config.php';

$firstName = $_POST['form'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$contact_message = $_POST['message'];
$to = "info@abhijitpiludaria.com";
$subject = "Contact from Abhijit Piludaria";

$message = '
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
<table border="0" cellpadding="0" cellspacing="0" width="100%"> 
<tr>
<td style="padding: 10px 0 30px 0">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
<tr>
<td align="center" style="padding: 0px; color: #16171b; background-color: #16171b; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
<img src="https://abhijitpiludaria.com/assets/images/alogo1.png" alt="Creating Email Magic" width="95" height="95" style="display: block;" />
</td>

</tr>
<tr>
<td align="center" bgcolor="#f1f1f1" style="padding: 40px 0 30px 0; color: #16171b; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
<img src="https://abhijitpiludaria.com/assets/images/thanks.png" alt="Creating Email Magic" width="300" height="230" style="display: block;" />
</td>
</tr>
<tr>
<td align="center" bgcolor="#f1f1f1" style="color: #16171b; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
<p style="margin: 0;">Congratulations!</p>
<p style="font-size: 18px; font-weight: bold;">You have New Inquiry Form Your Website.</p>
</td>
</tr>
<tr>
<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td style="color: #16171b;font-family: Arial, sans-serif;font-size: 17px;text-align: center;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">

Here is the inquiry that you have recived form Your Website <a href="#" style="color: #f43534;text-decoration: none; font-weight: 600;">Contat Form.</a>
</td>
</tr>
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td style="background-color: #26272a;width:25%;padding: .625em;border-bottom: 1px solid #f1f1f1;color: #f1f1f1;">
<strong>Name : </strong>
</td>
<td style="background-color: #f1f1f1;width:75%; padding: .625em;border-bottom: 1px solid #d3d3d3;">
<span class="bignumber">' . $firstName . ' ' . $lastName . '</span>
</td>

</tr>
<tr>
<td style="background-color: #26272a;width:25%;padding: .625em;border-bottom: 1px solid #f1f1f1;color: #f1f1f1;">
<strong>Email : </strong>
</td>
<td style="background-color: #f1f1f1;width:75%; padding: .625em;border-bottom: 1px solid #d3d3d3;">
<span class="bignumber">' . $email . '</span>
</td>
</tr>
<tr>
<td style="background-color: #26272a;width:25%;padding: .625em;border-bottom: 1px solid #f1f1f1;color: #f1f1f1;">
<strong>Subject : </strong>
</td>
<td style="background-color: #f1f1f1;width:75%; padding: .625em;border-bottom: 1px solid #d3d3d3;">
<span class="bignumber">' . $subject . '</span>
</td>
</tr>
<tr>
<td style="background-color: #26272a;width:25%;padding: .625em;border-bottom: 1px solid #f1f1f1;color: #f1f1f1;">
<strong>Message : </strong>
</td>
<td style="background-color: #f1f1f1;width:75%; padding: .625em;">
<span class="bignumber">' . $contact_message . '</span>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td bgcolor="#16171b" style="padding: 20px 20px 20px 20px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
Copyright &copy; 2020 Abhijitsinh Piludaria.
</td>
<td align="right" width="25%">
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;padding-left:7px;padding-right:7px;">
<a href="' . constant('facebook') . '" style="color: #ffffff;margin-left:5px;margin-right:5px;">
<img src="https://abhijitpiludaria.com/assets/images/facebook.png" alt="Twitter" width="30" style="display: block;" border="0" />
</a>
</td>   
<td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;padding-left:7px;padding-right:7px;">
<a href="' . constant('linkedin') . '" style="color: #ffffff;margin-left:5px;margin-right:5px;">
<img src="https://abhijitpiludaria.com/assets/images/linkedin.png" alt="Facebook" width="30" style="display: block;" border="0" />
</a>
</td>
<td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;padding-left:7px;padding-right:7px;">
<a href="' . constant('instagram') . '" style="color: #ffffff;margin-left:5px;margin-right:5px;">
<img src="https://abhijitpiludaria.com/assets/images/instagram.png" alt="Twitter" width="30" style="display: block;" border="0" />
</a>
</td>  
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:Admin <abhijitpiludaria.com>' . "\r\n";
$headers .= 'Reply-To:' . $email . "\r\n";

mail($to, $subject, $message, $headers);
echo '1';
?>