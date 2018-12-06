<!--webページを移動すると前のページで利用していた変数の値は使えなくなります
セッション変数で複数のページで使える$_SESSIONを用いる-->
<!--session_startよりも前にHTMLコードがあってはいけない-->
<?php
//セッションの開始
session_start();
?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>セッション開始ページ</title>
  </head>
  <body>
    <div>
      このページから購入するとクーポン割引が適用されます<br>
      <?php
      //セッション変数に値を代入する
      $_SESSION["coupon"] = "ABC123";//セッション変数を使います
      ?>
      <a href="02_goalpage.php">次のページへ</a>
    </div>
  </body>
</html>
