<!-- Task 4: Multidimensional Array
Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. -->
<?php

//Create a multidimensional array name $studentGrades

$studentGrades = array(
    array(
        'student_name' => 'Student 1',
        'grades' => array(
            'Math' => 85,
            'English' => 90,
            'Science' => 78
                         )
    ),
    array(
        'student_name' => 'Student 2',
        'grades' => array(
            'Math' => 92,
            'English' => 77,
            'Science' => 76
        )
    ),
    array(
        'student_name' => 'Student 3',
        'grades' => array(
            'Math' => 78,
            'English' => 86,
            'Science' => 65
        )
    )
);

// Function to calculate and print the average grade for each student
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student) {
        $grades = $student['grades'];
        $average = array_sum($grades) / count($grades);
        printf("%s's Average Grade: %.2f\n", $student['student_name'], $average);
    }
}

// Call the function to calculate and print average grades
calculateAverageGrades($studentGrades);
?>