<!DOCTYPE html>
<html>
<head>
    <title>example22-2</title>
    <style>
        body { margin: 30px; }
        table {
            border-collapse: collapse;
        }
        td {
            padding: 5px;
        }
        td:first-child {
            background-color: lavender;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        if (empty($_POST['login']) || 
            empty($_POST['pswd'])) {

            exit("กรุณาใส่อีเมลและรหัสผ่าน");
        }
    ?>
    <table border="1">
    <caption>ข้อมูลที่กำหนด</caption>
    <tr><td>อีเมล:</td><td><?= $_POST['login'] ?></td></tr>
    <tr><td>รหัสผ่าน:</td><td><?= $_POST['pswd'] ?></td></tr>
    <tr><td>วันเกิด:</td><td><?= $_POST['birthday'] ?></td></tr>
    <tr>
        <td>อายุ:</td>
        <td>
        <?php
            $birth = strtotime($_POST['birthday']);
            $y_now = date('Y');
            $y_born = date('Y', $birth);
            echo $y_now - $y_born;
        ?>   
        </td>
    </tr>
    <tr>
        <td>เงินเดือน:</td>
        <td><?= $_POST['salary'] ?? '' ?></td>
    </tr>
    <tr>
        <td>ข้อมูลเพิ่มเติม:</td>
        <td><?= $_POST['info'] ?></td>
    </tr>
    </table>
</body>
</html>