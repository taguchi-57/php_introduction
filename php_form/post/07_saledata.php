<!--サーバ側でクーポンを用いての割引処理-->

<?php
//販売データ
$couponList = ["nf23qw"=>0.75, "ha45as"=>0.8, "hf56zx"=>8.5];
$priceList = ["ax101"=>2300, "ax102"=>2900];

//クーポンコードで割引率を調べて返す
function getCouponRate($code){
  global $couponList;
  //該当するクーポンカードがあるかどうかチェックする
  $isCouponCode = array_key_exists($code, $couponList);
  if ($isCouponCode) {
    return $couponList[$code];//割引率を返します
  } else {
    //見つからなかった場合はNULLを返す
    return NULL;
  }
}
//商品IDで価格を調べて返す
function getPrice($id){
  global $priceList;
  //該当する商品IDがあるかどうかチェックする
  $isGoodsID = $array_key_exists($id, $priceList);
  if ($isGoodsID) {
    return $priceList[$id];
  } else {
    //見つからなければNULLを返す
    return NULL;
  }
}
?>
