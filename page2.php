<!DOCTYPE html>
<head lang="ja">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Hit and Blow</title>
</head>
<body>
<h1>Hit and Blow</h1>
<?php

$co=$_GET["computer"];
//回数を数える
if(isset($_GET["kaisuu"])){
    $num=$_GET["kaisuu"];
}else{
    $num=1;
}

echo "$num 回目";
?>

<form action="./page3.php" method="GET">
<font color=red>重複しない0以外の4桁の数字を入力してください</font><br>
<input type="number" min="1234" max="9876" name="number"></br>
<input type="submit" value="決定">
<input type="hidden" value=<?php echo $num; ?>  name="kaisuu">
<input type="hidden" value=<?php echo $co; ?>  name="computer">
</form>
</body>
</html>
