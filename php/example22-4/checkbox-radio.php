<!DOCTYPE html>
<html>
<head>
    <title>example22-4</title>
    <style>
        body { margin: 30px; }
    </style>
</head>
<body>
<?php
    $st = [];
    if (isset($_POST['styles'])) {
        foreach($_POST['styles'] as $s) {
            //เก็บค่าไว้ในอาร์เรย์
            array_push($st, $s);
        }
    }
    //หรือเขียนแบบรวบรัดเป็น
    //$st = $_POST['styles'] ?? [];
    
    //รวมสมาชิกอาร์เรย์ให้เป็นสตริง โดยเชื่อมด้วย ,
    echo 'รูปแบบฟอนต์: ' . implode(', ', $st) . '<br>';

    echo 'ขนาดฟอนต์: ' . ($_POST['size'] ?? '');
?>
</body>
</html>