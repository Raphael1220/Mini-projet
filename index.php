<?php
require __DIR__ . '/vendor/autoload.php';

use Application\Controller\App_config;
use mikehaertl\pdftk\Pdf;
use Application\Controller\ValidatePdf;
use Application\Controller\GeneratePdf;


$LOG_PATH = App_config::get('LOG_PATH', '');
// echo "[LOG_PATH]: $LOG_PATH";

// use Application\Controller\Logger;
// Logger::enableSystemLogs();
// $log_msg = Logger::getInstance();
// $log_msg->info('Hello World');

use Application\Controller\App;
App::run();


// Lecture champs PDF
$pdfe = new Pdf('./pdf/cerfa_16216_01.pdf');
// $pdfp = new Pdf('pdf/cerfa_11580_05.pdf');

$data = $pdfe->getDataFields();
$arr = (array) $data;
$arr = $data->__toArray();
print("<pre>".print_r($arr,true)."</pre>");

// $data2 = $pdfp->getDataFields();
// $arr2 = (array) $data2;
// $arr2 = $data2->__toArray();
// print("<pre>".print_r($arr2,true)."</pre>");



// Fonction validate
$jsonClientSOC = file_get_contents("./pdf/dataClientSOC.json");
$jsonClientIND = file_get_contents("./pdf/dataClientIND.json");

$pdfValidateSOC = new Application\Controller\ValidatePdf($jsonClientSOC);
$pdfValidateIND = new Application\Controller\ValidatePdf($jsonClientIND);

$validateResultSOC = $pdfValidateSOC->validate();
$validateResultIND = $pdfValidateIND->validate();

// print_r($validateResultIND);

// Fonction generate

$pdfGenerator = new Application\Controller\GeneratePdf();

// $pdfGenerator->generate($validateResultSOC);
// $pdfGenerator->generate($validateResultIND);

$data = ['type' => 'SOC', 'a10' => 'test'];

$pdf = new Pdf('./pdf/cerfa_16216_01.pdf');
$result1 = $pdf->fillForm($data)
    ->needAppearances()
    ->saveAs('./pdfGenerated/test.pdf');






