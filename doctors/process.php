<?php
use thiagoalessio\TesseractOCR\TesseractOCR;

require_once 'vendor/autoload.php';

// Check if a file was uploaded
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    // Get the uploaded file name
    $filename = basename($_FILES['image']['name']);

    // Define the destination folder
    $destinationFolder = 'uploads';

    // Create the uploads folder if it doesn't exist
    if (!is_dir($destinationFolder)) {
        mkdir($destinationFolder);
    }

    // Move the uploaded file to the destination folder
    $destinationPath = $destinationFolder . '/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'], $destinationPath);

    // Use Tesseract OCR to read the text
    $ocr = new TesseractOCR($destinationPath);
    $text = $ocr->run();

    // Create the text-extracts folder if it doesn't exist
    $extractsFolder = 'text-extracts';
    if (!is_dir($extractsFolder)) {
        mkdir($extractsFolder);
    }

    // Generate a unique filename for the text file
    $txtFilename = $extractsFolder . '/' . uniqid() . '.txt';

    // Store the extracted text in a text file
    file_put_contents($txtFilename, $text);

    // Get the path of the current script
    $scriptPath = $_SERVER['SCRIPT_NAME'];

    // Get the base URL
    $baseUrl = dirname($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $scriptPath);

    // Create the link to open the text file
    $fileUrl = $baseUrl . '/' . $txtFilename;

    // Display a success message with the link to the text file
    echo "Text extracted and saved in: <a href='$fileUrl' target='_blank'>$txtFilename</a>";

    // Delete the uploaded file
    unlink($destinationPath);
} else {
    echo 'No image file was uploaded.';
}
?>
