<?php
function get_fine($actualDay, $actualMonth, $actualYear, $expectedDay, $expectedMonth, $expectedYear) {
    if($actualYear > $expectedYear) return 10000;
    if($actualYear < $expectedYear) return 0;
    if($actualMonth > $expectedMonth) {
        return 500*($actualMonth-$expectedMonth);
    }
    if($actualMonth < $expectedMonth) return 0;
    if($actualDay > $expectedDay) {
        return 15*($actualDay-$expectedDay);
    }
    return 0;
}
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, '%d %d %d', $actualDay, $actualMonth, $actualYear);
fscanf($_fp, '%d %d %d', $expectedDay, $expectedMonth, $expectedYear);
$fine = get_fine($actualDay, $actualMonth, $actualYear, $expectedDay, $expectedMonth, $expectedYear);
echo $fine;

?>
