<?php
require_once 'phpqrcode/qrlib.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle file upload
    $targetDir = 'uploads/';
    $targetFile = $targetDir . basename($_FILES['file']['name']);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file is valid
    if (getimagesize($_FILES['file']['tmp_name']) === false) {
        echo 'Invalid file.';
        exit;
    }

    // Move uploaded file to target directory
    if (!move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
        echo 'Error uploading file.';
        exit;
    }

    // Generate QR code
    $qrCodeData = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/' . $targetFile;
    $qrCodeImage = 'qrcodes/' . uniqid() . '.png';
    QRcode::png($qrCodeData, $qrCodeImage);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Media Sharing via QR Code</title>
</head>
<body>
    <h1>Media Sharing via QR Code</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="file">Select a file:</label>
        <input type="file" name="file" id="file" accept="image/*" required>
        <br>
        <input type="submit" value="Generate QR Code">
    </form>

    <?php if (isset($qrCodeImage)) { ?>
    <h2>QR Code:</h2>
    <a href="<?php echo $targetFile; ?>" target="_blank">
        <img src="<?php echo $qrCodeImage; ?>" alt="QR Code">
    </a>
<?php } ?>

</body>
</html>
