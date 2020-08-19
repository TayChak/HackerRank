<?php

class Solution {
    // Write your code here
    private $stack = [];
    private $queue = [];
    function pushCharacter($ch) {
        array_push($this->stack, $ch);
    }
    function enqueueCharacter($ch) {
        array_push($this->queue, $ch);
    }
    function popCharacter() {
        return array_pop($this->stack);
    }
    function dequeueCharacter() {
        return array_shift($this->queue);
    }
}

// read the string s
$s = fgets(STDIN);

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; $i++) {
    if($obj->popCharacter() != $obj->dequeueCharacter()){
        $isPalindrome = false;

        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, ".$s.", is a palindrome.";
else
    echo "The word, ".$s.", is not a palindrome.";
?>
