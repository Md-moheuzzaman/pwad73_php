
<!DOCTYPE html>
<html>
<head>
    <title>Student Result Sheet</title>
</head>
<body>

<?php
// Create an associative array
$students = array(
    "Rahim" => 85,
    "Karim" => 92,
    "Sakib" => 78,
    "Nusrat" => 95,
    "Sumaiya" => 88
);

// Find maximum score
$max_score = max($students);

// Find student name with maximum score
$top_student = array_search($max_score, $students);

// Display result sheet
echo "<h2>Student Result Sheet</h2>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>Student Name</th>
        <th>Score</th>
      </tr>";

foreach ($students as $name => $score) {
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$score</td>";
    echo "</tr>";
}

echo "</table>";

// Display maximum score
echo "<h3>Highest Score: $max_score</h3>";
echo "<h3>Student Name: $top_student</h3>";

?>

</body>
</html>
