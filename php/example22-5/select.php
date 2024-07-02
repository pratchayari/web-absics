<!DOCTYPE html>
<html lang="en">
<head>
    <title>example22-5</title>
    <style>
        body {
            margin: 30px;
            font-size: 13pt;
        }
    </style>
</head>
<body>
    <b>ขนาดฟอนต์:</b>
    <?= $_POST['size']; ?>
    <br>
    <b>รูปแบบฟอนต์:</b>
    <?php
        $styles = $_POST['styles'] ?? [];
        echo implode(', ', $styles);
    ?>
</body>
</html>