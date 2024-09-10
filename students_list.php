<?php
include 'db.php'; // Include the database connection file

// Query to fetch students list data
$sql = "SELECT student_id, name, contact_number FROM students";
$result = $conn->query($sql);

// Display the students list in a table
if ($result->num_rows > 0) {
    echo "<h2>Students List with Contact Number</h2>";
    echo "<table border='1'><tr><th>Student ID</th><th>Name</th><th>Contact Number</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["student_id"]."</td><td>".$row["name"]."</td><td>".$row["contact_number"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No students found.";
}

$conn->close(); // Close the database connection
?>
