<?php
require_once("../lib/util.php")
//セッションの開始
session_start();
?>

<?php
//文字エンコードの検証
if (!cken($_POST)) {
  $encoding = mb_internal_encoding();
  $err = "Encoding Error! The expected encoding is " . $encoding;
  //エラーメッセージを出して、以下のコードを全てキャンセルする
  exit($err);
}
?>

<?php
//POSTされた値のセッションを変数に受けわたす
if (isset($_POST['name'])) {
  $_SESSION['name'] = $_POST['name'];
}
if (isset($_POST['kotoba'])) {
  $_SESSION['kotoba'] = $_SESSION['kotoba'];
}
//入力データの取り出しとチェック
$error = [];
//名前
if (empty($_SESSION['name'])) {
  //未設定の時エラー
  $error[] = "好きな言葉を入力してください";
} else {
  //好きな言葉を取り出す
  $kotoba = trim($_SESSION['kotoba'])
}
?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>確認ページ</title>
  </head>
  <body>
    <form>
    <?php if (count($error)>0) { ?>
      <!--エラーがあった時-->
      <span class="error"><?php echo implode('<br>', $error); ?></span><br>
      <span>
        <input type="button" value="戻る">
      </span>
    <?php } else { ?>
      <span>
        名前： <?php echo es($name); ?><br>
        好きな言葉： <?php echo es($kotoba); ?><br>
        <input type="button" value="戻る" onclick="location.href='input.html'">
        <input type="button" value="送信する" onclick="location.href='thankyou'">
      </span>
   </form>
  </body>
</html>
