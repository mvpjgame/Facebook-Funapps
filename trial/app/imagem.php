<?php
 
//Carregar imagem
$rImg = ImageCreateFromJPEG("apimg/imag1.jpg");
 
//Definir cor
$cor = imagecolorallocate($rImg, 15, 15, 15);
 
//Escrever nome
imagestring($rImg,5,256,90,urldecode($_GET['nome']),$cor);
 
//Header e output
header('Content-type: image/jpeg');
imagejpeg($rImg,NULL,100);

?>