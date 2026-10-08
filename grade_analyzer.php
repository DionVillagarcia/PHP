<?php

function getStatus($grade){
    if ($grade >= 75){
        return "PASSED";
    } else{
        return "FAILED";
    }
}
function getClassification($grade){
    if ($grade >=90 && $grade <= 100){
        return "Excelent";
    } elseif ($grade >= 85 && $grade <= 89){
        return "Very Good";
    } elseif($grade >= 80 && $grade <= 84){ 
        return "Good";
    } elseif($grade >= 75 && $grade <= 79){
        return "Satisfactory";
    } else {
        return "Failed";
    }
}

$students = [
    "Anna" => 85,
    "Ben" => 74,
    "Carla" => 92,
    "David" => 68,
    "Ella" => 88,
    "Frank" => 79
];

$total = 0;
$passed = 0;
$failed = 0;

$highest = 0;
$lowest = 101;

$highestName = "";
$lowestName = "";

foreach($students as $name => $grade){

    $status = getStatus($grade);
    $classification = getClassification($grade);

    if($grade >= 85 && $grade <= 100){
        $recognition = "Qualified";
    } else {
        $recognition ="Not Qualified";
    }

    echo "Name:  $name  <br/>";
    echo "Grade: $grade  <br/>";
    echo "Status: $status <br/>";
    echo "Classification: $classification <br/>";
    echo "Recognition: $recognition <br/>";
    echo "-------------------------<br/><br/>";

    
    if ($grade >= 75) {
        $passed++;
    } else {
        $failed++;
    }

    $total = $total + $grade;

    if ($grade > $highest) {
        $highest = $grade;
        $highestName = $name;
    }

    if ($grade < $lowest) {
        $lowest = $grade;
        $lowestName = $name;
    }
}

    $average = $total / count($students);

    echo "CLASS SUMMARY <br/><br/>";
    echo "Number of Students: ". count($students) . "<br/>";
    echo "Passed Students: $passed <br/>";
    echo "Failed Students: $failed <br/>";
    echo "Total Grades: $total <br/>";
    echo "Class Average: ". number_format($average, 2) . "<br/>";
    echo "Highest Grade: $highestName - $highest <br/>";
    echo "Lowest Grade: $lowestName - $lowest<br/>";

?>
