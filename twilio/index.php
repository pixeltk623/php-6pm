<?php 
	
	require_once '../vendor/autoload.php';

	// use Twilio\Rest\Client;

	// $sid = "ACcf617ef07f0b303abb37a1746cce8615";
	// $token = "a41e4449187ca561de5f3ce802fa9cac";

	// $twilio = new Client($sid, $token);

	// // echo "<pre>";
	// // print_r($client);

	// $message = $twilio->messages
 //                  ->create("+919835401515", // to
 //                           ["body" => "Hi Sharvan", "from" => "+18788776105"]
 //                  );

	// print($message->sid);

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

	$mail = new PHPMailer(true);

	$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dream.sharvan@gmail.com';                     //SMTP username
    $mail->Password   = '9835401515';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 

    $mail->setFrom('dream.sharvan@gmail.com', 'Tops Tech');
    $mail->addAddress('zeelsheth12440@gmail.com', 'Zeel Sheth');     //Add a recipient
    $mail->addAddress('sharvank1515@gmail.com');               //Name is optional
    $mail->addReplyTo('dream.sharvan@gmail.com', 'Tops Tech');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Tops Tech';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

    $mail->send();
  	

?>