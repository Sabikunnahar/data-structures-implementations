<?php
function findLargeNumber($arr){
    rsort($arr);
    $max = $arr[0];
    return $max;

}

$arr= [1, 2, 3, 40, 5];
echo "The largest number is:",findLargeNumber($arr); 

?>