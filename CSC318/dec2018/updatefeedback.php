q<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'dbconnect.php';
$experience = $_POST['optExperience'];
if(empty($_POST['chkSpecific']))
{   $branch_none = 1;
   $restaurant="";
}
else
{
   $restaurant= $_POST['chkSpecific'];
   $branch_none = 0;
}
$date = $_POST['dateService'];
$feedback = $_POST['txtFeedback'];
$salutation = $_POST['radSalutation'];
$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$phone = $_POST['txtPhone'];

$sql = "UPDATE feedback SET experience=?,branch=?,branch_none=?,feeddate=?,feedrespond=?,salutation=?,name=?,email=?,phoneno=? WHERE id=?";

if($stmt = $conn->prepare($sql))
{
   $stmt->bind_param('ssissssssi',$experience,$restaurant,$branch_none,$date,$feedback,$salutation,$name,$email,$phone,$id);
   $stmt->execute();
   if($stmt->affected_rows<0)
        phpAlert("Failed to update data");
   else
       phpAlert("Successfull");
   $stmt->close();

}
else
{
   $error = $conn->errno . ' ' . $conn->error;
   //echo $error;
}
header("Location : ViewFeedback.php");
//$sql = "INSERT INTO feedback(experience,branch,branch_none,feeddate,feedrespond,salutation,name,email,phoneno)  VALUE('" . $experience ."','". $restaurant ."','". $branch_none ."','". $date ."','". $feedback ."','". $salutation ."','". $name ."','". $email ."','". $phone . "');";

?>
