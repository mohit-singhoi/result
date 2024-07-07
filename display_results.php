<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname ="BCA_DEPARTMENT";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT roll_number, subject1, subject2,subject3,subject4,subject5,subject6 FROM student_result";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Roll: " . $row["roll_number"]. "  Subject 1: " . $row["subject1"].  "  Subject 2: " . $row["subject2"]. "  Subject 3: " . $row["subject3"].  "  Subject 4: " . $row["subject4"].  "  Subject 5: " . $row["subject5"].   "  Subject 6: " . $row["subject6"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
