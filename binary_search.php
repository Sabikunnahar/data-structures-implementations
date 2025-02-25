<?php
function binarySearch($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;  // Correct way to get the last index

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        if ($arr[$mid] == $target) {
            return $mid; // Target found, return index
        } elseif ($arr[$mid] < $target) {
            $left = $mid + 1;  // Move to the right half
        } else {
            $right = $mid - 1; // Move to the left half
        }
    }

    return -1; // Element not found
}

// Example usage
$arr = [10, 20, 30, 40, 50];
$target = 50;
$result = binarySearch($arr, $target);

echo ($result != -1) ? "Element found at index: $result" : "Element not found";
?>
