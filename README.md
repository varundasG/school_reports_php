# School Reports Project

##screenshot
![App Screenshot](/Screenshot_1.png)

![App Screenshot](/Screenshot_2.png)

![App Screenshot](/Screenshot_3.png)

This project is a PHP application designed to generate various student reports for an educational institution. It provides functionality for:

- Students Attendance Report
- Student Fees Due Report
- Students List with Contact Numbers

## Project Structure

## Getting Started

These instructions will help you set up and run the project on your local machine.

### Prerequisites

- PHP 7.x or higher
- MySQL 5.x or higher
- Web server (e.g., Apache, XAMPP, WAMP, MAMP)
- Git (for version control)

### Installation

1. **Clone the Repository:**

   Clone the project to your local machine using Git:

   ```bash
   git clone https://github.com/your-username/school-reports.git
   cd school-reports
   
// db.php
   
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>
   


Running the Application
Start Your Web Server:

Ensure that your Apache and MySQL services are running (if using XAMPP, WAMP, or MAMP).

Access the Reports:

Open your browser and navigate to:

Attendance Report: http://localhost/school_reports/attendance_report.php
Fees Due Report: http://localhost/school_reports/fees_due_report.php
Students List: http://localhost/school_reports/students_list.php

Usage
The application provides reports based on data from the MySQL database.
Make sure to populate the database tables (students, attendance, fees) with sample data to see the reports in action.