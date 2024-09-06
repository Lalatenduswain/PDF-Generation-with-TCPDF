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
$pdf->SetTitle('Design with Smaller Logo');
$pdf->SetSubject('PDF Design with TCPDF');
$pdf->SetKeywords('TCPDF, PDF, design, logo');

// Set margins
$pdf->SetMargins(15, 27, 15, true);
$pdf->SetHeaderMargin(5);
$pdf->SetFooterMargin(10);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 10);

// Add a page
$pdf->AddPage();

// Add the logo at the top right with smaller size
$imageFilePath = 'logo.jpg'; // Path to your image
$imageWidth = 20; // Width of the logo in mm
$imageHeight = 0; // Height of the logo (0 to auto scale)
$imageX = $pdf->getPageWidth() - $imageWidth - 10; // 10 mm from the right edge
$imageY = 10; // 10 mm from the top edge
$pdf->Image($imageFilePath, $imageX, $imageY, $imageWidth, $imageHeight, 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);

// Add existing design content here
$htmlContent = '
    <h1>Welcome to My PDF</h1>
    <p>This is an example of adding existing design content to a PDF.</p>
    <p>More content goes here...</p>
';

$pdf->writeHTML($htmlContent, true, false, true, false, '');

// Output the PDF as a file
$pdf->Output('design_with_smaller_logo.pdf', 'I'); // 'I' for inline display, 'D' for download
?>
