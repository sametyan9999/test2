<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);

echo '<br />';

function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 4);
echo $total;

echo '<br />';

function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if ($total > 210) {
    echo $total . "点なので合格です";
  } else {
    echo $total . "点なので不合格です";
  }
}
echo (exam(80, 60, 90));

echo '<br />';

// 四角形の面積を求める関数（たて × よこ）
function getSquareArea($base, $height)
{
  return $base * $height; // 面積 = 横 × 縦
}

// 三角形の面積を求める関数（底辺 × 高さ ÷ 2）
function getTriangleArea($base, $height)
{
  return $base * $height / 2; // 面積 = 底辺 × 高さ ÷ 2
}

// 台形の面積を求める関数（上底 + 下底）× 高さ ÷ 2
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2; // 面積 = (上底 + 下底) × 高さ ÷ 2
}

// 四角形の面積を計算して表示（5×5）
echo getSquareArea(5, 5) . "\n"; // → 25

// 三角形の面積を計算して表示（7×8÷2）
echo getTriangleArea(7, 8) . "\n"; // → 28

// 台形の面積を計算して表示（(4+5)×4÷2）
echo getTrapezoidArea(4, 5, 4); // → 18