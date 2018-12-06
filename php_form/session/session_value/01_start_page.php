<!--webページを移動すると前のページで利用していた変数の値は使えなくなります
セッション機能で複数のページで使える変数を定める-->
<!--session_startよりも前にHTMLコードがあってはいけない-->
<?php
//セッションの開始
session_start();
 ?>

 <!DOCTYPE html>
 <html lang="ja" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div>
       <?php
       //セッション変数を調べる
       if (isset($_SESSION["coupon"])) {
         //クーポンコードを取り出す
         $coupon = $_SESSION["coupon"];
         //正しいクーポンコード
         $couponList = ["ABC123", "XYZ999"];
         //クーポンコードをチェックする
         if (in_array($coupon, $couponList)) {
           echo es($coupon), "は、正しいクーポンです";
         } else {
           echo es($coupon), "は、誤ったコードです。";
         }
       }

        ?>

     </div>

   </body>
 </html>
