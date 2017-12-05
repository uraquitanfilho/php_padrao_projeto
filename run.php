<?php
include 'vendor/autoload.php';

/*
$html = new SyxPHP\Html\Html;

$img = $html->img('http://www.fundosanimais.com/Imagens/imagens-lobos.jpg');
echo $html->a($img,'http://www.google.com.br', ['class' =>'btn-primary']);

*/

//ou chamando estaticamente

use SyxPHP\Html\Html as H;
echo H::a(H::img('http://www.fundosanimais.com/Imagens/imagens-lobos.jpg'),'http://www.google.com.br', ['class' =>'btn-primary']);


//$link = new SyxPHP\Html\Tags\A;
//$img = new SyxPHP\Html\Tags\Img;
//$attributes = new SyxPHP\Html\Attributes(['http://www.urakombat.com']);

//echo $link->get('Meu Site', $attributes);

//echo $link->get($img->get('http://www.fundosanimais.com/Imagens/imagens-lobos.jpg'), $attributes);
echo PHP_EOL;




