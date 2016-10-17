<?php
//B. 寫程式算一下: 利用1,2,3,4這四個數字，可組出多少個數字互不相同三位數?
function p($n, $m) {
    if($n < $m) return false;
	$num = 1;
	for($i=0; $i<$m; $i++){
		$num = $num * ($n-$i);
	}
	return $num;
}

function c($n, $m){
	if($n < $m) return false;
	return p($n,$m)/p($m,$m);
}

//echo p(4,3)."<br>";

echo "1,2,3,4可組出組合:".c(4,3);

?>