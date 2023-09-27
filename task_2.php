<!-- Task 2: Array Manipulation
Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array. -->

<?php
$numbers=range(1,10); // containing the numbers 1 to 10.
print_r($numbers);

// Filter out Even number and keep only odd numbers
$oddNumbers=[];
foreach($numbers as $number){
    if($number%2 !==0){
        $oddNumbers[]=$number;
    }
}

print_r($oddNumbers); //Print Odd number after removing even number.