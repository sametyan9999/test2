<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo '<br />';

$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}

echo '<br />';

// 複数の人の情報（名前、年齢、性別）を2次元配列で定義
$people = [
  ['Taro', 25, 'men'],     // 1人目：名前、年齢、性別
  ['Jiro', 20, 'men'],     // 2人目
  ['hanako', 16, 'women']  // 3人目
];

// 配列の中の各人（1人分の配列）を順番に取り出すループ
foreach ($people as $person) {
  // $person[0] は名前、$person[1] は年齢、$person[2] は性別
  // 1人分の情報をフォーマットして表示（HTMLの改行タグ付き）
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br />';
}