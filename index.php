<?php

require "vendor/autoload.php";

// $report = new \App\S\Report();
// $template = new \App\S\HtmlTemplate();
// $template2 = new \App\S\PhpTemplate();

// $template->render($report->renderReport());
// $template2->render($report->renderReport());


$report = new \App\O\Report();
$repository = new \App\O\ReportRepository($report, new \App\O\FIleSave('file.txt'));
$repository = new \App\O\ReportRepository($report, new \App\O\DBSave("localhost",'root','solid',''));
$repository->save();

/*$rect = new \App\L\Square();
$rect->setWidth(5);
$rect->setHeight(4);


echo $rect->area();*/
/*
define("TEMPLATE", __DIR__);

$layout = new \App\L\Ex\PartialView();

$header = new \App\L\Ex\PartialView('header.php');
$header->content = "Header content";

$body = new \App\L\Ex\PartialView('body.php');
$body->content = "Body content";

$footer = new \App\L\Ex\PartialView('footer.php');
$footer->content = "Footer content";


$layout->addViews([
    $header,
    $body,
    $footer,
]);

echo $layout->render();*/

/*$order  = new \App\I\B\QuickOrder();

echo $order->getTotalPrice();*/

/*$order = new \App\I\G\QuickOrder();
$order2 = new \App\I\G\Order();

$testController = new \App\I\G\TestController($order2);*/


//$report = new \App\D\Report( new \App\D\View());
//$repository = new \App\O\ReportRepository($report, new \App\O\FIleSave('file.txt'));
//$repository = new \App\D\ReportRepository($report, new \App\D\FIleSave('fileD.txt'));
//$repository->save();
