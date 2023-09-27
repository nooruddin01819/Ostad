<!-- Task 1: String Manipulation
Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:
Convert the string to all lowercase.
Replace "brown" with "red" in the string.
Print the modified text. -->
<?php
function modifyText($text) {
    
    $lowercaseText = strtolower($text); // Convert the string to all lowercase strtolower
    $modifiedText = str_replace("brown", "red", $lowercaseText);  // Replace "brown" with "red" in the string
    echo $modifiedText; // Print the modified text
}

// Given initial text
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function with the provided text
modifyText($text);
?>
