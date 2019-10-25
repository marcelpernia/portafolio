<?php// session_start(); ?>
<?
// VARIABLES A COMPLETAR
$var_template = 'emailer-preflight-planilla.txt';
// $var_destinatario = 'info@nobleairchater.com';
$var_destinatario = 'marcelpm1987@gmail.com';
$var_envia = 'customer@nobleairchater.com';
$var_titulo = 'Pre-flight form from nobleairchater.com';
$var_gracias = 'pre-flight-form.php?enviado';

$fp = fopen($var_template, 'r');
$template = fread($fp, filesize($var_template));
fclose($fp);

while(list($key, $val) = each($_POST)) {
	$key_x = ':'.$key.':';
	$template = ereg_replace($key_x,$val,$template);
}

$template.= 'IP: '.$_SERVER['REMOTE_ADDR'];


@mail($var_destinatario, $var_titulo, $template, "From: $var_envia\r\nReply-to:$var_envia");
header('Location: '.$var_gracias);
?>
