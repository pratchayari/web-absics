<!DOCTYPE html>
<html>
<head>
    <title>example22-1</title>
</head>
<body>
    <?php
        $q = $_GET['q'];
    ?>
    <p>
        ค้นหา: <b><?= $q ?></b><br>
        พบข้อมูล: <?= rand(100, 1000) ?> รายการ
    </p>
</body>
</html>