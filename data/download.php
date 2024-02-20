<?php
$file = 'cakes.xml'; // Path to your XML file

if (file_exists($file)) {
    // Set headers
    header('Content-Description: File Transfer');
    header('Content-Type: application/xml');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Content-Length: ' . filesize($file));
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Expires: 0');
    // Read the file and output its contents
    readfile($file);
    exit;
} else {
    // File does not exist
    die('Error: File not found.');
}
