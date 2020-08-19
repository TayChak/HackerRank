<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$S);
function throwMyException() {
    throw new Exception('Bad String');
}
try {
    ($S>0)? 0 : throwMyException();
    echo $S;
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
