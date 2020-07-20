<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fclose($stdin);

$b = decbin($n);
$max = 0;
$cnt = 0;
for($i=0; $i<strlen($b);$i++) {
    if($b[$i] == 1 ) {
        $cnt++;
        if( $cnt > $max ) $max = $cnt;
        continue;
    }
    $cnt = 0;
}
echo $max;
?>
