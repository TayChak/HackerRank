<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
// Write Your Code Here
$numberOfSwaps = 0;
for($i=0; $i<$n; $i++) {
    for($j=0; $j<$n-1; $j++) {
        if ($a[$j] > $a[$j+1]) {
            $temp = $a[$j];
            $a[$j] = $a[$j+1];
            $a[$j+1] = $temp;
            $numberOfSwaps++;
        }
    }
    if ($numberOfSwaps == 0) break;
}
echo "Array is sorted in ".$numberOfSwaps." swaps.\n";
echo "First Element: ".$a[0]."\n";
echo "Last Element: ".$a[$n-1]."\n";

?>
