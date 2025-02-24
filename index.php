<?php
function isPalindrome($str) {
    // Remove spaces and convert to lowercase for case-insensitive comparison
    $str = strtolower(str_replace(' ', '', $str));


    // Reverse the string
    $revStr = strrev($str);
    
    // Check if original and reversed strings are the same
    return $str === $revStr;
}

// Example usage
echo isPalindrome("madam") ? "Yes, it's a palindrome" : "No, it's not a palindrome"; // Output: Yes, it's a palindrome
echo "<br>";
echo isPalindrome("hello") ? "Yes, it's a palindrome" : "No, it's not a palindrome"; // Output: No, it's not a palindrome

?>
