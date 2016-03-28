<?php
if($_POST['action'] == 'send') {
	
	// Стартую сессию
	// ---------------
	//session_start();
	//echo '<pre>';
	//print_r($_SESSION['captcha_keystring']);
	//print_r($_POST);
	//echo '</pre>';
	
	$name = $_POST['your-name'];
	$email = $_POST['your-email'];
	$comment = $_POST['your-message'];
	
	$phone = '';
	$spec = '';
	
	
	function checkEmail($email)
	{
		return (preg_match('/^[0-9A-Za-z_\-\.]+@(?:[0-9A-Za-z\-]+\.)+[A-Za-z]{2,6}$/', $email)); 
	}
	
	function checkPhone($phone)
	{
		return (preg_match('/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/', $phone)); 
	}
	
	
	$errors = array();
	
	if (!$name) {
		$errors[] = 'Введите Ваше имя'; 
	}
	//if (!$phone || !checkPhone($phone)) {
	//	$errors[] = 'Неверно введен номер телефона'; 
	//}

	if($email && !checkEmail($email)) {
		$errors[$k] = 'Неверно заполнено поле "Ваш Email"';
	}
	//if ( !(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] == $_POST['keystring']) ){
	//	$errors[] = 'Неверно заполнено поле "Защита от спама"'; 
	//}
	

//	echo '<pre>';
//	print_r($_SESSION['captcha_keystring']);
//	print_r($_POST);
//	print_r($assort);
//	echo '</pre>';


	
//	exit;
	
	// Если капча введена верно -- отправляю письмо
	// ---------------------------------------------
	if( !count($errors) )
	{
		// Подключаю необходимые библиотеки и настройки
		// ---------------------------------------------

		require_once( 'lib/lib_Mail.php' );
		require_once( 'Mail_config.php' );


		// Инициализирую класс почты
		// --------------------------
		$Mailer = new FreakMailer();
	
	
		// Тема письма
		// ------------
		$Mailer->Subject = $Site['subject'] . ": " . $name;
	
	
		// Адрес письма (To:)
		// ------------------
		$Mailer->AddAddress( $Site['to_email'], $Site['to_email_name'] );
	
	
		// Текст письма
		// -------------
		$htmlBody  = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n";
		$htmlBody .= "<html>\n";
		$htmlBody .= "<head>\n";
		$htmlBody .= "<title>Форма заявки</title>\n";
		$htmlBody .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";
		$htmlBody .= "</head>\n";
		$htmlBody .= "<body>\n";
	

		if ( $Site['mail_text'])
		{
			$htmlBody .= "<p>" . $Site['mail_text'] . "</p>\n";
		}
		if ( $name)
		{
			
			$name    = strip_tags( trim( $name ));
			$Mailer->FromName = $name;
			$htmlBody .= "<p><strong>Имя:</strong> ". $name ."</p>\n";
		}
		
		if ( $email)
		{
			$email     = strip_tags( trim( $email));
			$Mailer->From = $email;
			$htmlBody .= "<p><strong>E-mail:</strong> ". $email ."</p>\n";
		}

		if ( $phone)
		{
			$phone_show   = strip_tags( trim( $phone ));
			$htmlBody .= "<p><strong>Телефон:</strong> ". $phone ."</p>\n";
		}

		if ( $comment)
		{
			$comment_show   = strip_tags( trim( $comment ));
			$htmlBody .= "<p><strong>Комментарий:</strong> ". $comment_show ."</p>\n";
		}
	  

		$htmlBody .= "</body>\n";
		$htmlBody .= "</html>\n";

		// Отправляю письмо
		// -----------------
		$Mailer->Body = $htmlBody;
		$Mailer->isHTML(true);
		$Mailer->Send();
	
		// Очищаю прицепы к письму
		// ------------------------
		$Mailer->ClearAddresses();
		$Mailer->ClearAttachments();
	
		header('Location: /send-contact.php?done=1');
		exit; 
	}

	
	//unset($_SESSION['captcha_keystring']);
	}


?>