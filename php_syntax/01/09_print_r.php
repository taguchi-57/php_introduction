<!--print()とecho()では配列やオブジェクトの中身を見ることはできない
    デバッグのためのprint_r　ただし論理値とNULLは出力できない
    論理値とNULLも出せるvar_dumpがおすすめ
-->

<?php
$colors = array("red", "blue", "green");
$now = new DateTime();
print_r($colors);
print_r($now);
?>

 <!--
 ブラウザでソースを表示するとこんな感じ
 Array
 (
     [0] => red
     [1] => blue
     [2] => green
 )
 DateTime Object
 (
     [date] => 2018-12-05 01:31:43.891758
     [timezone_type] => 3
     [timezone] => UTC
 )
 -->
