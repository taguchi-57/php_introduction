# php_introduction
入門書を動かしたコードです
ここにある分は動かして確認済みです
# 構成syntaxとform
## syntax
syntaxは基本的な文法です
他のオブジェクト思考の言語と考え方等は同じです

# Form
formは実際のwebページのフォーム処理の例です。
４つのスーパーグローバル変数ごとに構成を分けてあります。


|変数名|内容|
|:--|--:|
|$_POST|POSTリクエストのパラメータ。パラメータ名が配列のキーになる|
|$_SESSION|セッション変数|
|$_COOKIE|クッキーの値。クッキーの名前が配列のキーになる|
|$_FILES|アップロードされたファイルの情報|

他にもGETやENV、SERVER、REQUESTがありますが今回は触れません
