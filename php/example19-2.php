<!DOCTYPE html>
<html>
<head>
    <title>example19-2</title>
</head>
<body>
    <h3><?php echo 'PHP for VS Code'; ?></h3>    
    <div style="font-size: 12pt; color: blue;">
        <?php echo '<b>สิ่งที่ต้องติดตั้ง:</b>'; ?>
    </div>
    <ul>
    <?php
        echo '<li>PHP Interpreter</li>';
        echo '<li>Intelephense</li>';
        echo '<li>PHP Server</li>';
    ?>
    </ul>   
    <?php
    $name = 'สมชาย';
    $age = 35;
    $career = 'รับจ้างทั่วไป';
    //echo "ชื่อ: $name อายุ: $age ปี อาชีพ: $career"; 
    echo "ชื่อ: ${name} อายุ: ${age} ปี อาชีพ: ${career}"; 
    ?>    
</body>
</html>