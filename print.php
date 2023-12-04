<?php
require_once('vendor/autoload.php'); // If using Composer

// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bawaslu";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM your_table";
$result = $conn->query($sql);

// Create a new PDF instance
$pdf = new TCPDF();
$pdf->SetAutoPageBreak(true, 10);

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', '', 12);

// Loop through database results and add to PDF
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(0, 10, $row['column1'] . ' - ' . $row['column2'], 0, 1);
}

// Output PDF to the browser
$pdf->Output('output.pdf', 'I');

// Close the database connection
$conn->close();
?>
