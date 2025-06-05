<?php
// ステータスコードの配列を読み込む（連想配列が格納されている）
require_once('config/status_codes.php');

// フォームから送られてきた正解のコードとユーザーの選択肢をサニタイズ（HTMLエスケープ処理）
$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);

// ユーザーが何も選択しなかった場合、クイズ画面にリダイレクトして戻す
if (!$option) {
  header('Location: index.php');
  exit; // リダイレクト後に処理を止めるため必須
}

// 正解のコードと説明を取得するために初期化
$code = '';
$description = '';

// ステータスコード一覧から、正解のコードに一致するものを探して情報を取り出す
foreach ($status_codes as $status_code) {
  if ($status_code['code'] === $answer_code) {
    $code = $status_code['code'];           // 正解のステータスコード番号
    $description = $status_code['description']; // 正解の説明文
  }
}

// ユーザーの選択肢と正解を比較して、正誤を判定（true = 正解, false = 不正解）
$result = $option === $code;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8"> <!-- 日本語を正しく表示するための文字コード -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IE対応 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- レスポンシブ対応 -->
  <title>Status Code Quiz</title>
  <!-- CSSファイル読み込み（順番が大事） -->
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <!-- サイト上部のヘッダー -->
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Status Code Quiz
      </a>
    </div>
  </header>

  <!-- メインコンテンツ（結果表示） -->
  <main>
    <div class="result__content">
      
      <!-- 正解・不正解の表示 -->
      <div class="result">
        <?php if ($result): ?>
          <h2 class="result__text_correct">正解</h2>
        <?php else: ?>
          <h2 class="result__text_incorrect">不正解</h2>
        <?php endif; ?>
      </div>

      <!-- 回答内容の表 -->
      <div class="answer-table">
        <table class="answer-table__inner">
          <tr class="answer-table__row">
            <th class="answer-table__header">ステータスコード</th>
            <td class="answer-table__text">
              <?php echo $code ?> <!-- 正解のステータスコード番号を表示 -->
            </td>
          </tr>
          <tr class="answer-table__row">
            <th class="answer-table__header">説明</th>
            <td class="answer-table__text">
              <?php echo $description ?> <!-- 正解のステータスコードの説明を表示 -->
            </td>
          </tr>
        </table>
      </div>
    </div>
  </main>
</body>

</html>