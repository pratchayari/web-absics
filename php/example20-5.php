<!DOCTYPE html>
<html>
<head>
    <title>example20-5</title>
</head>
<body>
    <?php
        $count = 0;
        do {
            $r = rand(1, 100); 	 
            //สร้างเลขสุ่ม ที่มีค่าระหว่าง 1 - 100
             
            $count++;
        } while ($r < 80); 	
        //ถ้ายังได้ไม่ได้เลขสุ่มที่มีค่าเกิน 30000 ก็สุ่มต่อไปเรื่อยๆ
        
        echo "
            ต้องสุ่ม $count ครั้ง จึงจะได้เลขสุ่มที่มีค่า 80+ <br>
            ค่าที่ได้คือ $r <br>
        ";
    ?>
</body>
</html>