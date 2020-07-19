<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%d\n", $n);
for($t=0; $t<$n; $t++) {
    fscanf($_fp, "%s\n", $str);
    for($i=0; $i<strlen($str); $i+=2) echo $str[$i];
    echo ' ';
    for($i=1; $i<strlen($str); $i+=2) echo $str[$i];
    echo "\n";
}
?>
