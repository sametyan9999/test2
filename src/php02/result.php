<?php

// functions/search_city_time.php を読み込み、searchCityTime 関数を使えるようにする
require_once('functions/search_city_time.php');

// 「東京」の現在時刻を取得（比較の基準として常に表示）
$tokyo = searchCityTime('東京');

// フォームから送信された都市名を取得し、XSS対策としてエスケープ処理を行う
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);

// 指定された都市名から現在時刻などの情報を取得
$comparison = searchCityTime($city);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- 文字エンコーディング、互換性、レスポンシブ対応 -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ページタイトル -->
  <title>World Clock</title>

  <!-- CSSの読み込み（リセット、共通スタイル、ページ固有のスタイル） -->
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <!-- ヘッダー（ロゴ） -->
  <header class="header">
    <div class="header__inner">
      <!-- トップページへのリンク -->
      <a class="header__logo" href="/php02/index.php">
        World Clock
      </a>
    </div>
  </header>

  <!-- メインコンテンツ -->
  <main>
    <div class="result__content">
      <div class="result-cards">

        <!-- 東京のカード表示 -->
        <div class="result-card">
          <div class="result-card__img-wrapper">
            <!-- 国旗画像を表示（修正：パスを正しく） -->
            <img class="result-card__img" src="img/national_flag_img/<?php echo $tokyo['img']; ?>" alt="国旗">
          </div>
          <div class="result-card__body">
            <!-- 都市名と現在時刻の表示 -->
            <p class="result-card__city">
              <?php echo $tokyo['name']; ?>
            </p>
            <p class="result-card__time">
              <?php echo $tokyo['time']; ?>
            </p>
          </div>
        </div>

        <!-- 選択された都市のカード表示 -->
        <div class="result-card">
          <div class="result-card__img-wrapper">
            <!-- 国旗画像を表示（修正：パスを正しく） -->
            <img class="result-card__img" src="img/national_flag_img/<?php echo $comparison['img']; ?>" alt="国旗">
          </div>
          <div class="result-card__body">
            <!-- 都市名と現在時刻の表示 -->
            <p class="result-card__city">
              <?php echo $comparison['name']; ?>
            </p>
            <p class="result-card__time">
              <?php echo $comparison['time']; ?>
            </p>
          </div>
        </div>

      </div>
    </div>
  </main>
</body>

</html>