<!DOCTYPE html>
<html>
<head>
    <title>example20-1</title>
</head>
<body>
    <?php
        $q = 'php';
        $b = 1;
        $n = 10;
        $t = 1000;
        echo '
            <b>กรณีที่แทรกใน single quotes</b><br>
            ค้นหา: $q ผลลัพธ์ลำดับที่ $b - $n จากทั้งหมด $t
        ';

        echo '<br><br>';

        echo "
            <b>กรณีที่แทรกใน double quotes</b><br>
            ค้นหา: $q ผลลัพธ์ลำดับที่ $b - $n จากทั้งหมด $t
        ";
    ?>
</body>
</html>