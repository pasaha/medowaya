<?

// Адреса, на которые отправится письмо
// ------------------------------------

$Site['from_email'] = "wildcharm@ya.ru";


$Site['to_email'] = "wildcharm@ya.ru, katerina@medowaya.com, pasaha@list.ru, pasaha83@gmail.com";
$Site['utf-8'];

// Тема письма
// ------------
$Site['subject'] = "Сообщение с сайта medowaya.com";
$Site['mail_text'] = "Новое сообщение с сайта <a href='http://medowaya.com/'>medowaya.com</a>\r\n\n";
$Site['spec_text']['no'] = "Недоступно";
$Site['spec_text']['yes'] = "Доступно<br/>Заказ обратного звонка осуществлен в рамках спецпредложения.<br/> Данный пользователь имеет право получить подарок на выбор.";

include( 'mailer/send.php' );

if (count($errors)) { ?>
	<?php foreach ($errors as $key => $value){ ?>
	<p class="error_message"><?php echo $value ?></p>
	<?php
	break;
	}
} else {
	echo('Сообщение отправлено');
}

function isEmail($email) { // Email address verification, do not edit.
return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

?>
