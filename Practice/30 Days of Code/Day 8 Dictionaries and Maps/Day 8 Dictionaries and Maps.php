<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$n = rtrim(fgets($_fp));
$phoneBook = [];
for($i=0; $i<$n; $i++) {
    list($k,$v) = explode(' ',rtrim(fgets($_fp)));
    $phoneBook[$k] = $v;
}

while( $k = rtrim(fgets($_fp)) ) {
    if( !array_key_exists($k,$phoneBook) ) {
        echo "Not found\n";
        continue;
    }
    echo $k.'='.$phoneBook[$k]."\n";
}

?>
