<?php

/**
 * パラメータからデータを取得する
 * @param $key 対象のパラメータ
 */
function getResquestParam($key) {
  return $_GET[$key];
}

/**
 * パラメータによってソート条件を変更する
 * @param $a 比較対象の値
 * @param $b 比較対象の値
 */
function sortCondition($a, $b) {
  $sort = filter_input(INPUT_GET, 'sort');  
  if (is_null($sort)) {
    $sort = "ASC";
  }
  return ($sort === "ASC") ? ($a > $b) : ($a < $b);
}


$array = explode(',', getResquestParam("array"));
$arrayLength = count($array);
for ($i = 0; $i < $arrayLength; $i++) {
  for ($j = 1; $j < $arrayLength ; $j++ ) {
    if(sortCondition($array[$j - 1], $array[$j])) {
      $temp = $array[$j];
      $array[$j] = $array[$j - 1];
      $array[$j - 1] = $temp;
    }
  }
}

echo "<pre>";
print_r($array);
echo "</pre>";
