<!--POSTを処理する時のお約束-->

<?php
//XSS対策のHTMLエスケープ
function es($data, $charset="utf-8"){
  //$dataが配列の時
  if (is_array($data)){
    //再帰呼び出し
    return array_map(__METHOD__, $data);
  } else {
    //HTMLエスケープを行う
    return htmlspecialchars($data, ENT_QUOTES, $charset);
  }
}
//配列の文字エンコードチェックを行う
function cken(array $data){//arrayは配列を引数に持っているという意味
  $result = true;
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      //含まれている値が配列の時文字列に直結する
      $value = implode("", $value);
    }
    if (!mb_check_encoding($value)) {
      //文字エンコードが一致しない時
      $result = false;
      //forreachでの走査をブレイクする
      break;
    }
  }
  return $result;
}
 ?>
