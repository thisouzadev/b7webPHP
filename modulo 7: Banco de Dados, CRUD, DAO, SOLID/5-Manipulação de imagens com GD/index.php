<?php
$imagem = imagecreatetruecolor(300, 300);

$cor = imagecolorallocate($imagem, 255, 0, 0);
imagefill($imagem, 0, 0, $cor);

header("Content-Type: image/jpeg");
imagejpeg($imagem, null, 100);
// imagejpeg($imagem, 'nova.jpg', 100);