<?php

// 世界の主要都市の情報をまとめた配列（連想配列の配列）
$cities = [
  [
    // 都市名（日本語表示用）
    'name' => 'シドニー',

    // PHPで使うタイムゾーン識別子
    'time_zone' => 'Australia/Sydney',

    // 国旗画像のファイル名
    'img' => 'australia.jpg'
  ],
  [
    'name' => '東京',
    'time_zone' => 'Asia/Tokyo',
    'img' => 'japan.jpg'
  ],
  [
    'name' => '上海',
    'time_zone' => 'Asia/Shanghai',
    'img' => 'china.jpg'
  ],
  [
    'name' => 'モスクワ',
    'time_zone' => 'Europe/Moscow',
    'img' => 'russia.jpg'
  ],
  [
    'name' => 'ロンドン',
    'time_zone' => 'Europe/London',
    'img' => 'british.jpg'
  ],
  [
    'name' => 'ヨハネスブルグ',
    'time_zone' => 'Africa/Johannesburg',
    'img' => 'south-africa.jpg'
  ],
  [
    'name' => 'ニューヨーク',
    'time_zone' => 'America/New_York',
    'img' => 'america.jpg'
  ]
];