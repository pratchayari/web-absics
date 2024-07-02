<!DOCTYPE html>
<html>
<head>
    <title>example22-6</title>
    <style>
        body {
            margin: 30px;
            font-size: 13pt;
        }
    </style>
</head>
<body>
    <?php
        $q = $_GET['q'] ?? '';
    ?>
    <form method="get"> <!-- ไม่ระบุ action ก็ได้ -->
        <input type="text" name="q" value="<?= $q ?>">
        <button>ค้นหา</button> 
    </form>  
    <br>
    <?php
        if (!empty($q)) {
            $r = random_int(100, 1000);
            echo "
                <div>
                    ผลการค้นหา: $q <br>
                    พบข้อมูล: $r รายการ
                </div>      
            ";
        }
    ?>
</body>
</html>