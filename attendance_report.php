<?php
include 'db.php'; // Include the database connection file

// Query to fetch attendance data
$sql = "SELECT students.name, attendance.date, attendance.status 
        FROM attendance 
        JOIN students ON attendance.student_id = students.student_id";
$result = $conn->query($sql);

// Display the attendance report in a table
if ($result->num_rows > 0) {
    echo "<h2>Students Attendance Report</h2>";
    echo "<table border='1'><tr><th>Student Name</th><th>Date</th><th>Status</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["date"]."</td><td>".$row["status"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No attendance records found.";
}

$conn->close(); // Close the database connection
?>
