<?php
$link=$_GET['img'];
$largura =isset($_GET['l'])?$_GET['l']:null;
$altura = isset($_GET['a'])?$_GET['a']:null;
include "m2brimagem.class.php";
// instancia objeto e carrega imagem
$oImg = new m2brimagem(urldecode($link));
// valida imagem

if ($oImg->valida()) {
        // redimensiona imagem, cropando
        $oImg->redimensiona( $largura, $altura, 'crop');
        $oImg->grava();	
}