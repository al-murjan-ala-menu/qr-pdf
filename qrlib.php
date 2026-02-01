<?php
include 'qrlib.php';
$pdfUrl = "https://khurram33.github.io/qr-pdf/al-murjan-menu.pdf";
header('Content-Type: image/png');
QRcode::png($pdfUrl, false, QR_ECLEVEL_L, 10);
?>
