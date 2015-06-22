<?php
function nonRepeatingDigits($n){
    $result = array();
    for($i = 102; $i <= $n; $i++){
        if($i < 1000){
            $hundreds = floor($i / 100);
            $tens = floor($i / 10) % 10;
            $ones = $i % 10;
            if ($hundreds != $tens && $hundreds != $ones && $tens != $ones) {
                array_push($result, $i);
            }
        }
    }

    if (sizeof($result) > 0) {
        echo join(', ', $result);
    } else {
        echo "no";
    }
    echo "<br />\n";
}

nonRepeatingDigits(1234);
nonRepeatingDigits(145);
nonRepeatingDigits(15);
nonRepeatingDigits(247);
?>