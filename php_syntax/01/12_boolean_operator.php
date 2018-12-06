<?php
//論理演算子&&とandは同じだけれどもandを使う場合は()で囲わなければ最初だけで判断される（||と
//orも同じ）
$test1 = TRUE;
$test2 = FALSE;
$hantei1 = $test1 && $test2; //両方がtrue
$hantei2 = $test1 || $test2; //両方または片方がtrue
$hantei3 = ($test2 xor $test1); //どちらか片方のみtrue(排他的)
$hantei4 = !$test1; //trueならばfalse falseならばtrue(否定)
var_dump($hantei1);
var_dump($hantei2);
var_dump($hantei3);
var_dump($hantei4);
?>
