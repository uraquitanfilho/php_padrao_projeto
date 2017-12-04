<?php
include 'vendor/autoload.php';

$html = new SyxPHP\Html\Html;

$img = $html->img('logo.png',['class' => 'img_responsive']);
echo $html->a($img,'http://www.google.com.br', ['class' =>'btn-primary']);