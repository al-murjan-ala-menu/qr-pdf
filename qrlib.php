<?php
include 'phpqrcode/qrlib.php'; // path to the library

$pdfUrl = "https://khurram33.github.io/qr-pdf/al-murjan-menu.pdf";

// Generate QR code and save it as image
QRcode::png($pdfUrl, "pdf_qr.png", QR_ECLEVEL_L, 10, 2);

echo "<h2>Scan QR to Preview PDF</h2>";
echo "<img src='pdf_qr.png' alt='QR Code'>";
?>
