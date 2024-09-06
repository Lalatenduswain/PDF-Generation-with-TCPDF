<?php
// Include Composer's autoload file
require 'vendor/autoload.php';

// Use the TCPDF class
use TCPDF;

// Create a new instance of TCPDF
$pdf = new TCPDF();

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('PDF Download Example');
$pdf->SetSubject('PDF with TCPDF');
$pdf->SetKeywords('TCPDF, PDF, download');

// Set margins
$pdf->SetMargins(15, 25, 15, true);
$pdf->SetHeaderMargin(0);
$pdf->SetFooterMargin(15);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 15);

// Add a page
$pdf->AddPage();

// Add the logo at the top right with a smaller size
$imageFilePath = 'logo.jpg'; // Path to your image
$imageWidth = 30; // Width of the logo in mm
$imageHeight = 0; // Height of the logo (0 to auto scale)
$imageX = $pdf->getPageWidth() - $imageWidth - 15; // 15 mm from the right edge
$imageY = 15; // 15 mm from the top edge
$pdf->Image($imageFilePath, $imageX, $imageY, $imageWidth, $imageHeight, 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);

// Add content to the PDF
$htmlContent = '
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                color: #333;
                background-color: #f4f4f4;
            }
            h1 {
                color: #007bff;
            }
            p {
                font-size: 14px;
                line-height: 1.6;
            }
        </style>
    </head>
    <body>
        <h1>Welcome to the PDF Download Example</h1>
        <p>This is a sample PDF generated using TCPDF. It includes some content to demonstrate how to create and style a PDF file.</p>
        <p>Click the download button on the previous page to generate and download this PDF.</p>
    </body>
    </html>
';

// Write HTML content to the PDF
$pdf->writeHTML($htmlContent, true, false, true, false, '');

// Output the PDF as a file
$pdf->Output('download_example.pdf', 'D'); // 'D' for download
?>
