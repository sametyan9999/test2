<?php
for ($i = 0; $i < 4; $i++) {
    echo $i;
}

echo '<br />';

for ($i = 1; $i <= 5; $i++) {
  echo $i * 2 . '<br />';
}

$i = 0;

while ($i < 3) {
    echo 'i = ' . $i . '<br />';
    $i += 1;
}

$a = 1;

while ($a <= 20) {
    echo $a . '<br />';
    $a += 1;
}

echo '<br />';

$i = 0;
do {
  echo $i . '<br />';
  $i++;
} while ($i < 5);

echo '<br />';
$Fizz = "Fizz";           // Fizz を文字として変数に入れる
$Buzz = "Buzz";           // Buzz を文字として変数に入れる
$FizzBuzz = "FizzBuzz";   // FizzBuzz を文字として変数に入れる

// 1から50までの数字を $i に入れてくり返す
for ($i = 1; $i <= 50; $i++) {
  
  // 15の倍数（3と5の両方の倍数）なら FizzBuzz を表示　　１５で割って余りが0なら FizzBuzz を表示
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  
  // 3の倍数なら Fizz を表示　　３で割って余りが0なら Fizz を表示
  } else if ($i % 3 == 0) {
    echo $Fizz;
  
  // 5の倍数なら Buzz を表示　　5で割って余りが0なら Buzz を表示
  } else if ($i % 5 == 0) {
    echo $Buzz;
  
  // どれでもないなら数字そのままを表示
  } else {
    echo $i;
  }
}

  // 改行
  echo '<br />';

// 	$i は「行（よこの並び）」の番号。$i = 1 からスタートして、 $i < 6 の間、1ずつ増やしていく。つまり：5回くり返す。このループが 5行分 を作ります。
for ($i = 1; $i < 6; $i++) {
  //	$j は「列（たての並び）」の番号。$j = 1 からスタートして、 $j < 6 の間、1ずつ増やしていく。つまり：5回くり返す。このループが 5列分 を作ります。
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}