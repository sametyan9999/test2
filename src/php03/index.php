<?php
// ステータスコードの一覧を読み込む（多次元連想配列）
require_once('config/status_codes.php');

// ステータスコード配列からランダムに4つのインデックスを取得
$random_indexes = array_rand($status_codes, 4);

// ランダムに選ばれたインデックスから、選択肢用の配列を作成
$options = [];
foreach ($random_indexes as $index) {
  $options[] = $status_codes[$index];
}

// 4つの選択肢の中から、ランダムに1つを「正解の問題」として出題
$question = $options[mt_rand(0, 3)];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8"> <!-- 日本語などの文字化けを防ぐ -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- 古いIEでも最新表示 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- モバイル対応 -->
  <title>Status Code Quiz</title>

  <!-- CSSの読み込み（リセット→共通→ページ専用） -->
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <!-- サイト上部：タイトルロゴ -->
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Status Code Quiz
      </a>
    </div>
  </header>

  <!-- クイズ本体 -->
  <main>
    <div class="quiz__content">

      <!-- 出題エリア -->
      <div class="question">
        <p class="question__text">
          Q. 以下の内容に当てはまるステータスコードを選んでください
        </p>
        <p class="question__text">
          <!-- PHPで、問題文（description）を表示 -->
          <?php echo $question['description'] ?>
        </p>
      </div>


      
       <!-- 回答フォーム：選択肢を選んで「result.php」に送信 -->
       <form class="quiz-form" action="result.php" method="post">

<!-- 隠しフィールド：正解のコード（照合用） -->
<input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">

<!-- 選択肢の表示（ラジオボタン） -->
<div class="quiz-form__item">
  <?php foreach ($options as $option): ?>
    <div class="quiz-form__group">
      <!-- ラジオボタン：各選択肢 -->
      <input
        class="quiz-form__radio"
        id="<?php echo $option['code'] ?>"   
        type="radio"
        name="option"                        
        value="<?php echo $option['code'] ?>" 
      >
      <label
        class="quiz-form__label"
        for="<?php echo $option['code'] ?>"  
      >
        <?php echo $option['code'] ?>         <!-- ステータスコード番号を表示 -->
      </label>
    </div>
  <?php endforeach; ?>
</div>


<!-- 提出ボタン -->
<div class="quiz-form__button">
  <button class="quiz-form__button-submit" type="submit">
    回答
  </button>
</div>
</form>

</div>
</main>
</body>

</html>