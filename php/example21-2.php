<!DOCTYPE html>
<html>
<head>
    <title>example21-2</title>
</head>
<body>
<?php
	$rudes = ['xxx', 'yyy', 'zzz']; //สมมติเป็นคำหยาบ
	$msg = 'I want zzz but she needs Xxx!';
	$a = [];	//อาร์เรย์ว่างสำหรับเก็บคำหยาบที่พบ

	foreach ($rudes as $r) {
		if (stripos($msg, $r) != null) {  //ถ้ามีคำหยาบ
			$a[] = $r; 	//ถ้าพบให้เก็บในอาร์เรย์
		}
	}

	if (count($a) > 0) {
		//รวมอาร์เรย์เป็นสตริง โดยคั่นด้วย <br> เพื่อขึ้นบรรทัดใหม่
		$str = implode('<br>', $a);
		echo "พบคำที่ไม่เหมาะสมคือ: <br>$str";
	}
?>
</body>
</html>