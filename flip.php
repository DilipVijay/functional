<?php

include 'Utility.php';
//$num=Utility::getint();

$obj=new Utility();
$num=$obj->getint();
$tail = 0;
$head = 0;
$t = 0;
$h = 0;
if ($num > 0) {
    for ($j = 0; $j < $i; $j++) {
        $k = rand(1, 10);
        echo "k values is " . $k . "\n";
        if ($k < 5)
        {
            echo "tails " . $t = $tail + 1 . "\n";
        } else 
        {
            echo "heads " . $h = $head + 1 . "\n";
        }
    }
    echo "\n tails " . $a = ($t / $i) * 100;
    echo "\n";
    echo " heads " . $b = ($h / $i) * 100;
    echo "\n";

} else {
    echo "enter the positive integer value";
    echo "\n";
}
