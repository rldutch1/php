<?php
//Source: https://stackoverflow.com/questions/467793/how-do-i-convert-a-pdf-document-to-a-preview-image-in-php
//How do I convert a PDF document to a preview image in PHP?

$im = new imagick('file.pdf[0]');
$im->setImageFormat('jpg');
header('Content-Type: image/jpeg');
echo $im;
?>