<?php
// フォームから送られてきた「名前」を受け取って、HTMLとして安全に変換
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);

// フォームから送られてきた「選んだ商品（A/B/C）」を受け取って、HTMLとして安全に変換
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);

// フォームから送られてきた「注文数」を受け取って、HTMLとして安全に変換
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

// 画面に出力（それぞれの情報をわかりやすく表示）
print "私の名前は、" . $my_name . "<br>";
print "ご希望の商品は、" . $choices . "<br>";
print "注文数は、" . $number;
?>