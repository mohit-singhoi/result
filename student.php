<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname ="BCA_DEPARTMENT";

$con = mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
echo "Not Connect";
}

//Start
$sid =$_POST['sid'];
$name =$_POST['name'];
$fname =$_POST['fname'];
$mname =$_POST['mname'];
$dob =$_POST['dob'];
$gender =$_POST['gender'];
$email =$_POST['email'];
$pincode =$_POST['pincode'];
$mobileno =$_POST['mobileno'];
$address =$_POST['address'];

$sql="INSERT INTO `students`(`sid`, `name`, `fname`, `mname`, `dob`, `gender`, `email`, `pincode`, `mobileno`, `address`) VALUES ('$sid','$name','$fname','$mname','$dob','$gender','$email','$pincode','$mobileno','$address')";

$result =mysqli_query($con, $sql);

if($result)
{
echo "Data Is  Submitted";
}
else
{
    echo "Error";

}
?>