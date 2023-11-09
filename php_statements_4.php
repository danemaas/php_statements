<?php
//================= Q: 4
$students = '[
    {"name": "John Garg", "age": "15", "school": "Ahlcon Public school"},
    {"name": "Smith Soy", "age": "16", "school": "St. Marie school"},
    {"name": "Charle Rena", "age": "16", "school": "St. Columba school"}
    ]';

$students = json_decode($students, true);

function processStudent($student){
    echo "Name: {$student['name']}<br>";
    echo "Age: {$student['age']}<br>";
    echo "School: {$student['school']}<br>";
}

function processStudents($students){
    foreach ($students as $student) {
        processStudent($student);
        echo "<br>";
    }
}

processStudents($students);
?>