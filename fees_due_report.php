<?php
include 'db.php'; // Include the database connection file

// Query to fetch fees due data
$sql = "SELECT students.name, fees.fee_type, fees.amount_due, fees.due_date 
        FROM fees 
        JOIN students ON fees.student_id = students.student_id 
        WHERE fees.amount_due > 0";
$result = $conn->query($sql);

// Display the fees due report in a table
if ($result->num_rows > 0) {
    echo "<h2>Student Fees Due Report</h2>";
    echo "<table border='1'><tr><th>Student Name</th><th>Fee Type</th><th>Amount Due</th><th>Due Date</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["fee_type"]."</td><td>".$row["amount_due"]."</td><td>".$row["due_date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No fees due records found.";
}

$conn->close(); // Close the database connection
?>
