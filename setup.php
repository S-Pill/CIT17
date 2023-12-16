<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "Serafica_database";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Use the selected database
mysqli_select_db($conn, $dbname);

// Create Student table
$sql_student = "CREATE TABLE IF NOT EXISTS Student (
    StudentID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    DateOfBirth DATE,
    Email VARCHAR(100) NOT NULL,
    Phone VARCHAR(15)
)";
$conn->query($sql_student);

// Create Course table
$sql_course = "CREATE TABLE IF NOT EXISTS Course (
    CourseID INT AUTO_INCREMENT PRIMARY KEY,
    CourseName VARCHAR(100) NOT NULL,
    Credits INT
)";
$conn->query($sql_course);

// Create Instructor table
$sql_instructor = "CREATE TABLE IF NOT EXISTS Instructor (
    InstructorID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Phone VARCHAR(15)
)";
$conn->query($sql_instructor);

// Create Enrollment table
$sql_enrollment = "CREATE TABLE IF NOT EXISTS Enrollment (
    EnrollmentID INT AUTO_INCREMENT PRIMARY KEY,
    StudentID INT,
    CourseID INT,
    EnrollmentDate DATE,
    Grade VARCHAR(5),
    FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
    FOREIGN KEY (CourseID) REFERENCES Course(CourseID)
)";
$conn->query($sql_enrollment);

$conn->close();
?>
