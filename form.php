<?php
// require 'PHPMailer-master/PHPMailerAutoload.php';
$englishMessages = array(
"SUBMIT_SUCCESSFULLY"=>"<div class=sentMailSuc>Your request has been sent. </br>Please expect a call shortly from one of our Media Consultants.</div>",
"SUBMIT_FAILED"=>"Failed",
);
$arabicMessages = array(
"SUBMIT_SUCCESSFULLY"=>"<div class=sentMailSuc>شكراً لإهتمامك، احد مندوبينا سيقوم بالإتصال بك قريباً.</div>",
"SUBMIT_FAILED"=>"لم ينجح الارسال",
);

if (!isset($_REQUEST['lang']) || $_REQUEST['lang'] == 'english'){
	$allMessages = $englishMessages;
}else if (@$_REQUEST['lang'] == 'arabic'){
	$allMessages = $arabicMessages;
}

if ( isset($_REQUEST['formRequesterFirstName']) && $_REQUEST['formRequesterFirstName'] != ''){

	$formname = @$_REQUEST['formRequesterFormName'];
	$utm_source = $_REQUEST["utm_source"];
	$utm_language = $_REQUEST["utm_language"];
    $utm_adname = $_REQUEST["utm_adname"];
	$to ="listing@yellow.com.eg";
    $bcc ="waguih@yellow.com.eg";
    $subject="MyBusinessOnline -- from: ".$formname." page";

	/*waguih@yellow.com.eg,listing@yellow.com.eg*/


	//First Name Subject
	$firstname = @$_REQUEST['formRequesterFirstName'];

	//Mobile from address
	$mobile = @$_REQUEST['formRequesterMobile'];

	//Email
	$from = @$_REQUEST['formRequesterEmail'];

	//city
	$city = @$_REQUEST['formRequesterCity'];

    //companyname
	$companyname = @$_REQUEST['formRequesterCompanyName'];

    //website
	$website = @$_REQUEST['formRequesterWebsite'];

    //BusinessActivity
	$businessactivity = @$_REQUEST['formRequesterBusinessActivity'];

    //title
	$title = @$_REQUEST['formRequesterTitle'];

    //other
	$other = @$_REQUEST['formRequesterOther'];

    //timefrom
	$timefrom = @$_REQUEST['formRequesterTimefrom'];

    //timeto
	$timeto = @$_REQUEST['formRequesterTimeto'];

    //message
	$message = @$_REQUEST['formRequesterMessage'];


	//add data to DB
	$servername = "yellowmedia.db.9125900.hostedresource.com";
	$username = "yellowmedia";
	$password = "GcjRAloaf9#";
	$dbname = "yellowmedia";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$conn->query("SET NAMES 'utf8'");
	$conn->query('SET CHARACTER SET utf8');

	$sql = "INSERT INTO my_business_online (name, email, mobile, message, city , company_name , businessactivity ,website , title , other , timefrom , timeto , platform,  page_name, date, utm_source, utm_language , utm_adname)
	VALUES ('".$firstname."', '".$from."' , '".$mobile."', '".$message."', '".$city."', '".$companyname."', '".$businessactivity."' , '".$website."', '".$title."', '".$other."', '".$timefrom."', '".$timeto."','".$_SERVER['HTTP_USER_AGENT']."','".$formname."','".date("Y-m-d H:i:s")."','".$utm_source."', '".$utm_language."','".$utm_adname."' )";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
    //end adding data to DB


//	$emailContent = '';
//	$emailContent .= "from:".$from."\n";
//	$emailContent .= "mobile:".$mobile."\n";
//	$emailContent .= "message:".$message."\n";
//	$emailTemplateFile = fopen("form.html", "r");



	$emailContent = file_get_contents('form.html');


	$emailContent = preg_replace('/-##FIRSTNAME##-/',$firstname,$emailContent);

	$emailContent = preg_replace('/-##MOBILE##-/',$mobile,$emailContent);

	$emailContent = preg_replace('/-##EMAIL##-/',$from,$emailContent);

    $emailContent = preg_replace('/-##CITY##-/',$city,$emailContent);

    $emailContent = preg_replace('/-##COMPANYNAME##-/',$companyname,$emailContent);

    $emailContent = preg_replace('/-##WEBSITE##-/',$website,$emailContent);

    $emailContent = preg_replace('/-##BUSINESSACTIVITY##-/',$businessactivity,$emailContent);

    $emailContent = preg_replace('/-##TITLE##-/',$title,$emailContent);

    $emailContent = preg_replace('/-##OTHER##-/',$other,$emailContent);

    $emailContent = preg_replace('/-##TIMEFROM##-/',$timefrom,$emailContent);

    $emailContent = preg_replace('/-##TIMETO##-/',$timeto,$emailContent);

    $emailContent = preg_replace('/-##MESSAGE##-/',$message,$emailContent);

    $emailContent = preg_replace('/-##UTM_SOURCE##-/',$utm_source,$emailContent);

    $emailContent = preg_replace('/-##UTM_LANGUAGE##-/',$utm_language,$emailContent);

    $emailContent = preg_replace('/-##UTM_ADNAME##-/',$utm_adname,$emailContent);




	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";


	// Additional headers
	$headers .= 'To: <'.$to.'>' . "\r\n";
	$headers .= "From:" . $from . "\r\n";
	$headers .= 'Bcc: ' . $bcc . "\r\n";

	if ( @mail($too,$subject,$emailContent,$headers) ){
		$endFormMessage = $allMessages['SUBMIT_SUCCESSFULLY'];
	} else {
		//$endFormMessage = $allMessages['SUBMIT_FAILED'];
		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->SMTPDebug = 0;
		$mail->Host = 'smtpout.secureserver.net';                       // Specify main and backup server
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'noreply@solutions.yellowpages.com.eg';          // SMTP username
		$mail->Password = 'eLg1Z@1F';               	// SMTP password
		//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
		$mail->Port = 80;                                    //Set the SMTP port number - 587 for authenticated TLS
		$mail->setFrom('noreply@solutions.yellowpages.com.eg', 'MYBUSINESSONLINE');     //Set who the message is to be sent from
		//$mail->addReplyTo('mnassser@gmail.com', 'First Last');  //Set an alternative reply-to address
		$mail->addAddress($to, '');  // Add a recipient
//		$mail->addAddress($to2, '');  // Add a recipient
//		$mail->addAddress($too, '');  // Add a recipient
		////$mail->addCC('cc@example.com');
		$mail->addBCC($bcc);
		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
		//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $emailContent;
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

		if(!$mail->send()) {
		   $endFormMessage = $allMessages['SUBMIT_FAILED'];
		   //echo $mail->ErrorInfo;
		   exit;
		}
		else {
			$endFormMessage = $allMessages['SUBMIT_SUCCESSFULLY'];
		}
	}

	//with message in URL
	$HTTP_REFERER = $_SERVER['HTTP_REFERER'];
	$HTTP_REFERER = explode('?',$HTTP_REFERER);
	$HTTP_REFERER = $HTTP_REFERER[0];
	echo '<meta http-equiv="refresh" content="0; url='.$HTTP_REFERER.'?endFormMessage='.$endFormMessage.'" />';
	//header( 'Location: '.$HTTP_REFERER.'?endFormMessage='.$endFormMessage );
}