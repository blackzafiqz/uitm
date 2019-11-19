<?php
include 'dbconnect.php';

$id = $_GET['id'];

$sql = "DELETE FROM feedback WHERE id=?";

if($stmt = $conn->prepare($sql))
{
    $stmt->bind_param('i',$id);
    $stmt->execute();
    if($stmt->affected_rows<0)
        phpAlert( "Failed to remove data");
    else
        phpAlert("Successfull");
    $stmt->close();

}
else
{
    $error = $conn->errno . ' ' . $conn->error;
    phpAlert($error);
}
header("Location : ViewFeedback.php");
?>
