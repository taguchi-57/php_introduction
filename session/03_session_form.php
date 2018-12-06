<!--フォーム入力をセッション変数に移し替える-->

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>入力ページ</title>
  </head>
  <body>
    <form action="confirm.php" method="POST">
      <li><label>名前：
        <input type="text" name="name">
      </label> </li>
      <li><label>好きな言葉：
        <input type="text" name="kotoba">
      </label></li>
      <li><input type="submit" value="確認する"></li>
      </ul>

    </form>
  </body>
</html>
