<?php 
    

    // HTML 

    // css bs 
    // SQL 

    // Core PHP 

    // Adv PHP (OOPs 
    // )

    // MVC 

    // Login system

    // Js/Jquery 

    // CI 
 
    // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


    echo "<pre>";

    print_r($_COOKIE);

    $cookie_name = "user";
    $cookie_value = "John Doe";

   setcookie($cookie_name, $cookie_value, time() + (60), "/"); // 86400 = 1 day

    die;

    $conn = mysqli_connect("localhost","root","","php-6pm");

    $query = "SELECT * FROM email_template WHERE id = 1";

    $res = mysqli_query($conn, $query);

    $dataObject = mysqli_fetch_object($res);

    // echo "<pre>";

    // echo $dataObject->template;


    $queryU = "SELECT * FROM users";

    $resU = mysqli_query($conn, $queryU);

    while($dataObjectU = mysqli_fetch_object($resU)) {
        $html[] =  str_replace("{name}",$dataObjectU->name,$dataObject->template);
    }


    // echo "<pre>";

    // print_r($html);

    // die;

    // foreach ($html as $key => $value) {
    //     echo $value;
    // }

    
    

    // die;
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

    foreach ($html as $key => $value) {
      
   
    $mail->setFrom('dream.sharvan@gmail.com', 'Tops Tech');
    // $mail->addAddress('zeelsheth12440@gmail.com', 'Zeel Sheth');     //Add a recipient
    $mail->addAddress('sharvank1515@gmail.com');               //Name is optional
    $mail->addReplyTo('dream.sharvan@gmail.com', 'Tops Tech');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('example.jpg', 'example.jpg');    //Optional name



    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Tops Tech';
    $mail->Body    = $value;

    $mail->send();
  	

     }

?>