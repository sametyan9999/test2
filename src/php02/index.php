<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- 文字化けを防ぐための文字コード設定（日本語を正しく表示） -->
  <meta charset="UTF-8">

  <!-- Internet Explorerで互換表示を避けるための設定 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- スマホやタブレットで画面サイズに合わせて表示させる設定 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ブラウザのタブに表示されるタイトル -->
  <title>World Clock</title>

  <!-- CSSファイルの読み込み -->
  <link rel="stylesheet" href="css/sanitize.css"> <!-- ブラウザのデフォルトCSSをリセット -->
  <link rel="stylesheet" href="css/common.css">   <!-- サイト共通のスタイル -->
  <link rel="stylesheet" href="css/index.css">    <!-- このページ専用のスタイル -->
</head>
<body>
  <!-- サイトのヘッダー部分（ロゴなど） -->
  <header class="header">
    <div class="header__inner">
      <!-- サイトのロゴをクリックするとトップページへ戻るリンク -->
      <a class="header__logo" href="/php02/index.php">
        World Clock
      </a>
    </div>
  </header>
    <!-- ページのメインコンテンツ -->
    <main>
    <!-- 検索フォーム全体を囲むブロック -->
    <div class="search-form__content">
              <!-- 見出し（タイトル）部分 -->
      <div class="search-form__heading">
        <h2>日本と世界の時間を比較</h2> <!-- ページの目的を伝えるタイトル -->
      </div>
            <!-- 都市を選んで検索するためのフォーム -->
            <form class="search-form" action="result.php" method="get">
                        <!-- 都市を選ぶプルダウンメニュー -->
        <div class="search-form__item">
          <select class="search-form__item-select" name="city">
            <option value="シドニー">シドニー</option>
            <option value="上海">上海</option>
            <option value="モスクワ">モスクワ</option>
            <option value="ロンドン">ロンドン</option>
            <option value="ヨハネスブルグ">ヨハネスブルグ</option>
            <option value="ニューヨーク">ニューヨーク</option>
          </select>
        </div>
                <!-- 検索ボタン -->
                <div class="search-form__button">
          <button class="search-form__button-submit" type="submit">
            検索
          </button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>