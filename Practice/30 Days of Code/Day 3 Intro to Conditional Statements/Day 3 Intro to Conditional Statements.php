<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

if(($N % 2 !==0) || (($N % 2 == 0) && ($N < 21) && (5 < $N))) {
    print "Weird";
} elseif ((($N % 2 == 0) && (1<$N) && ($N < 6)) || (($N > 20)&& ($N % 2 ==0))) {
    print "Not Weird";
}

fclose($stdin);
?>
