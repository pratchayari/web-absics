<!DOCTYPE html>
<html>
<head>
    <title>example20-3</title>
</head>
<body>
    <?php
        $min = 100;
        $max = 0;

        for ($i = 1; $i <= 5; $i++) {
            $r = rand(1, 100); //สร้างเลขสุ่ม 1 - 100

            if ($r < $min) {
                $min = $r;
            }

            if ($r > $max) {
                $max = $r;
            }

            if ($i > 1) {
                echo ", ";
            }

            echo $r;
        }

        echo "
            <br>ค่าต่ำสุดคือ: $min
            <br>ค่าสูงสุดคือ: $max  
        ";
    ?>
</body>
</html>