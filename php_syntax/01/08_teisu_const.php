<!--定数　　一度決めたら変更できない（変更してはいけない値）
    　　　　constで定義するとグローバル定数
           関数定義、if 、try ~ catch、ループでは定義できない　
-->

<?php
const TAX = 0.08;
$price = 1250 * (1+TAX);
echo $price;
?>
