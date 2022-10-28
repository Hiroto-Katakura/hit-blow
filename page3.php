<!DOCTYPE html>
<head lang="ja">
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <title>Hit and Blow</title>
    <link rel="stylesheet" href="style3.css" type="text/css">
</head>
<body>
    <div class="top-wrapper">
        <div class = "container">
            <h1>Hit and Blow</h1>

            <?php
            $p_num=$_GET['number'];
            $num=$_GET['kaisuu'];
            $hit=0;
            $blow=0;

            $com=array();

            if($num==1){
                $n=array("1","2","3","4","5","6","7","8","9");
                shuffle($n);
                for($i=0;$i<4;$i++){
                        $com[$i]=$n[$i];
                }
                $co=implode("",$com);
            }else{
	            if(isset($_GET["computer"])){
	                $co=$_GET["computer"];
	                $com=str_split($co);
	            }
            }

            $player=str_split($p_num);
            echo $p_num;
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

            $num=$num+1;
            ?>

            <?php if($blow==4): ?>
                <input class="bt1" type="button" onclick="location.href='page4.html'" value="次に進む">
            <?php else: ?>
                <form action="./page2.php" method="GET">
                    <input class="bt2" type="submit" value="次に進む">
                    <input type="hidden" value=<?php echo $num; ?>  name="kaisuu">
                    <input type="hidden" value=<?php echo $co; ?>  name="computer">
                </form>
            <?php endif; ?>
        </div>
    </div>
    <footer>
        <div class="container">
            <p>webアプリ構築実験</p>
        </div>
    </footer>
</body>
</html>
