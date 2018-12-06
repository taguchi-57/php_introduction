<?php
$a = 0;
echo $a, "<br>";
$a += 10;
echo $a, "<br>";
$a -= 3;
echo $a, "<br>";
$a *= 7;
echo $a, "<br>";
$a /= 3;
echo $a;
 ?>
<br>
<br>
<?php
$a = 0;
$b = ++$a;
echo "\$aは{$a}、\$bは{$b}";
//$aは1、$bは1----１を加算したあと代入
echo "<br>";
$a = 0;
$b = $a++;
echo "\$aは{$a}、\$bは{$b}";
//$aは0、$bは1----ステートメントを抜ける時に代入
echo "<br>";
$a = 0;
$b = $a + 1;
echo "\$aは{$a}、\$bは{$b}";
//$aは0、$bは1
  ?>
