<?php

function calculateSum($subject1, $subject2, $subject3, $subject4, $subject5) {
    return $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
}

function calculateAverage($sum) {
    return $sum / 5;
}

function determineGrade($average) {
    switch (true) {
        case $average >= 80:
            return 'A+';
        case $average >= 70:
            return 'A';
        case $average >= 60:
            return 'A-';
        case $average >= 50:
            return 'B';
        case $average >= 40:
            return 'C';
        case $average >= 33:
            return 'D';
        case $average <= 32:
            return 'You have failed in the exam';
        default:
            return 'F';
    }
}

// Example subject scores
$subject1 = 45;
$subject2 = 58;
$subject3 = 50;
$subject4 = 46;
$subject5 = 33;

// Calculate sum
$sum = calculateSum($subject1, $subject2, $subject3, $subject4, $subject5);

// Calculate average
$average = calculateAverage($sum);

// Determine grade
$grade = determineGrade($average);

// Output results

echo "Sum: $sum\n";
echo "Average: $average\n";
echo "Grade: $grade\n";
