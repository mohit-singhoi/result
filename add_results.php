<?php
// Database connection
$server ="localhost";
$username ="root";
$password ="";
$dbname ="BCA_DEPARTMENT";

$con = mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
echo "Not Connect";
}


    // Insert data into database
    $id = $_POST['id'];
    $roll_number = $_POST['roll_number'];
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $subject4 = $_POST['subject4'];
    $subject5 = $_POST['subject5'];
    $subject6 = $_POST['subject6'];

 

    $sql="INSERT INTO `student_result`(`id`, `roll_number`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`) VALUES ('$id','$roll_number','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6')";
  
    $result =mysqli_query($con, $sql);

if($result)
{

echo "Results added successfully!";
}

    else
{
    echo "Error: " ;
}
?>

