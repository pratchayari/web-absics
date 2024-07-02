<!DOCTYPE html>
<html>
<head>
    <title>example20-6</title>
</head>
<body>
    <?php
        $sum = 0;
        echo 'Sum of 1 - ';
        for ($i = 1; $i <= 10; $i++) {
            $sum += $i;
            if ($sum >= 30) {
                $x = $i;
                //exit;
            }
        }
        echo "$x = $sum";
        exit;
    ?>
</body>
</html>