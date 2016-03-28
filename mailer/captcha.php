<?php
	session_start();
?>

	<p><img src="/include/mailer/captcha_img.php?<?php echo session_name()?>=<?php echo session_id()?>"></p>
	<p><input type="text" name="keystring"></p>
