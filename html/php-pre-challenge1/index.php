<?php

/**
 * あまりの計算をする
 * @param $i カウントしている数値
 * @param $baisuu 倍数
 */
function calcRemainder($i, $baisu) {
	return (($i % $bai) === 0);
}

for ($i = 1; $i <= 100; $i++) {
	$printStr = $i;
	if (calc($i, (3 * 5))) {
		$printStr .= "は3の倍数であり、5の倍数";
	} else if (calc($i, 3)) {
		$printStr .= "は3の倍数です";
	} else if (calc($i, 5)) {
		$printStr .= "は5の倍数です";
	}
	print $printStr . "<br>";
}
?>
