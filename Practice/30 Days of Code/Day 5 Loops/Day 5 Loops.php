<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fclose($stdin);
for($i=1; $i<=10; $i++) {
    echo "$n x $i = " . ($n*$i) . "\n";
}
?>
