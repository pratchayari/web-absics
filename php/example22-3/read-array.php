<!DOCTYPE html>
<html>
<head>
    <title>example22-3</title>
</head>
<body style="margin: 30px">
    <h3>ที่อยู่:</h3>
    <?php
        foreach ($_POST['addr'] as $value) {
            if (!empty($value)) {
                echo $value . '<br>';
            }
        }
    ?>
</body>
</html>