<?php
    class Difference{
    private $elements=array();
    public $maximumDifference;

// Write your code here
function __construct($arr) {
        $this->elements = $arr;
    }
    public function ComputeDifference() {
        $max = 1;
        $min = 100;
        foreach($this->elements as $num) {
            if( $num > $max ) $max = $num;
            if( $num < $min ) $min = $num;
        }
        $this->maximumDifference = $max - $min;
    }
} //End of Difference class


$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);
?>
