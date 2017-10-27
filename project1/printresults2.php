<?php
//composer autoload//

require_once __DIR__ .'/vendor/autoload.php';

ob_start();
include 'excelsearch.html';
$content=ob_get_clean();
$mpdf=new\Mpdf\Mpdf();
$mpdf->WriteHtml($content);
$mpdf->output();





?>