<?php
//A. 用星號疊出星星塔

for ( $starRow=0 ; $starRow<10 ; $starRow++ ) {
        for ( $starGap=10-$starRow ; $starGap>=0 ; $starGap-- ) {
        echo "&nbsp"."&nbsp";
}
        for ( $star=1 ; $star<=$starRow*2+1 ; $star++) {
        echo "*";
}
        echo "<br>";
}


?>