<?php
require __DIR__ . '/vendor/autoload.php';

use Application\Controller\App_config;
$LOG_PATH = App_config::get('LOG_PATH', '');
// echo "[LOG_PATH]: $LOG_PATH";

// use Application\Controller\Logger;
// Logger::enableSystemLogs();
// $log_msg = Logger::getInstance();
// $log_msg->info('Hello World');

use Application\Controller\App;
App::run();


// VAlEURS PDF
// use mikehaertl\pdftk\Pdf;
// $pdfe = new Pdf('pdf/cerfa_16216_01.pdf');
// $pdfp = new Pdf('pdf/cerfa_11580_05.pdf');

// $data = $pdfe->getDataFields();
// $arr = (array) $data;
// $arr = $data->__toArray();
// print("<pre>".print_r($arr,true)."</pre>");

// $data2 = $pdfp->getDataFields();
// $arr2 = (array) $data2;
// $arr2 = $data2->__toArray();
// print("<pre>".print_r($arr2,true)."</pre>");





// use Application\Controller\GeneratePdf;
// $pdfGenerator = new Application\Controller\GeneratePdf();

// $data = '['CAC1' => '1']';

// $result = $pdfGenerator->entrepriseGenerate($data);
// $pdfGenerator->entrepriseSend($result);
// print_r($pdfGenerator->entrepriseGenerate($data));





// VERIFICATION JSON
use Application\Controller\ValidatePdf;

$pdfValidate = new Application\Controller\ValidatePdf("entreprise");


$jsonClient = file_get_contents("./dataClient.json");

$parsed_jsonClient = json_decode($jsonClient, true);

print_r($pdfValidate->validate($parsed_jsonDoc, $parsed_jsonClient));











