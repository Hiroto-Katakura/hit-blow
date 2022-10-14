<!DOCTYPE html>
<head lang="ja">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Hit and Blow</title>
</head>
<body>
<h1>Hit and Blow</h1>

<?php
$p_num=$_GET['number'];
$num=$_GET['kaisuu'];
$hit=0;
$blow=0;

$com=array();

if($num==1){
    $n=array("0","1","2","3","4","5","6","7","8","9");
    shuffle($n);
    for($i=0;$i<4;$i++){
        $com[$i]=$n[$i];
    }
    print_r($com);
}
echo '<br>';

$player=str_split($p_num);
print_r($player);
echo '<br>';

for($i=0;$i<4;$i++){
    for($y=0;$y<4;$y++){
        if($com[$i]==$player[$y]){
            $hit+=1;
        }
    }
}
echo "hit:{$hit}";
echo '<br>';

for($i=0;$i<4;$i++){
    if($com[$i]==$player[$i]){
        $blow+=1;
    }
}
echo "blow:{$blow}";
echo '<br>';


?>
</body>
</html>
