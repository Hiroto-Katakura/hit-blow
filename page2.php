<!DOCTYPE html>
<head lang="ja">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Hit and Blow</title>
</head>
<body>
<h1>Hit and Blow</h1>
<?php

//回数を数える
if(isset($_GET['num'])){
    $num=$_GET['num'];
}else{
    $num=1;
}

echo "$num 回目";
?>

<form action="./page3.php" method="GET">
<font color=red>4桁の数字を入力してください</font><br>
<input type="number" min="0123" max="9876" name="number"></br>
<input type="submit" value="決定">
<input type="hidden" value=<?php echo $num; ?>  name="kaisuu">
</form>
</body>
</html>
