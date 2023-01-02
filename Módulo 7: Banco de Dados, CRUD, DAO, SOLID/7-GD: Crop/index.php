<?php
$arquivo = 'nova.jpg';
$maxWidth = 200;
$maxHeight = 200;
list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;
$finalX = 0;
$finalY = 0;

if($ratioDest > $ratio) {
  $finalWidth = $maxHeight * $ratio;
  $finalHeight = $maxHeight;
} else {
  $finalHeight = $maxWidth / $ratio;
  $finalWidth = $maxWidth;
}

if($finalWidth < $width) {
  $finalHeight = $width;
  $finalWidth = $width / $ratio;

  $finalY =  -(($finalHeight - $height) / 2);;
} else {
  $finalHeight = $height;
  $finalWidth = $height * $ratio;
  $finalX = -(($finalWidth - $width) / 2);
}


$imagem = imagecreatetruecolor($width, $height);
$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled(
  $imagem,
  $originalImg,
  $finalX,$finalY, 0, 0,
  $finalWidth, $finalHeight,
  $originalWidth, $originalHeight
);

header("Content-type: image/jpeg");
imagejpeg($imagem, null, 100);