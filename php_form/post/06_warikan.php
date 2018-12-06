<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>割り勘</title>
  </head>
  <body>
    <?php
    require_once("../lib/util.php");
    //文字コードの検証
    if (!cken($_POST)) {
      $encoding = mb_internal_encoding();
      $err = "Encoding Error! The expected is" . $encoding;
      //エラーメッセージを出して、以下のコードを全てキャンセルする
      exit($err)
    }
    //HTMLエスケープ(XSS対策)
    $_POST = es($_POST);
    ?>

    <?php
    //エラーメッセージを入れる配列
    $errors = [];
    ?>

    <?php
    //合計金額のチェック
    if (isset($_POST)) {
      $goukei = $_POST['goukei'];
      if (!ctype_digit('$goukei')) {
        //0以上の整数でないときはエラー
        $errors[] = "合計金額を整数で入力してください。"
      }
    } else {
      //未設定のエラー
      $errors[] = "合計金額が未設定";
    }
    //人数のチェック
    if (isset($_POST)) {
      $ninzu = $_POST['ninzu'];
      if (!ctype_digit($ninzu)) {
        //0以上の整数ではないときエラー
        $errors[] = "人数を整数で入力してください";
      } elseif ($ninzu==0) {
        //0の時エラー
        $errors[] = "0人では割れません";
      }
    } else {
      //未設定エラー
      $errors[] = "人数が未設定";
    }
    ?>

    <?php
    if (count($errors)>0) {
      //エラーがあった時
      echo "<ol class="error">";
      foreach ($errors as $value) {
        echo "<li>",  $value='戻る' ;

      }
    } ?>

  </body>
</html>
