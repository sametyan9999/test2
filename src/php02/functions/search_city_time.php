<?php

// 指定された都市名から都市情報（現在の時刻も含めて）を取得する関数
function searchCityTime($city_name)
{
  // 都市情報の配列（cities）が入ったファイルを読み込む
  require('config/cities.php');

  // 配列$citiesの中から1つずつ$cityに取り出してループ
  foreach ($cities as $city) {

    // 引数で渡された都市名と一致するものを探す
    if ($city['name'] === $city_name) {

      // 一致した都市のタイムゾーンを使って現在の時刻を取得
      $date_time = new DateTime('', new DateTimeZone($city['time_zone']));

      // 時刻を「時:分（24時間表記）」の形式にフォーマット
      $time = $date_time->format('H:i');

      // 都市情報に'time'というキーで現在時刻を追加
      $city['time'] = $time;

      // 都市情報（名前、タイムゾーン、画像、現在時刻）を返す
      return $city;
    }
  }

  // 一致する都市が見つからなかった場合は何も返さない（null）
}