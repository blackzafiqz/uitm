<?php
include_once 'dbconnect.php';

$id = $_GET['id'];

$sql = "SELECT experience,branch,branch_none,feeddate,feedrespond,salutation,name,email,phoneno FROM feedback WHERE id=?";

if($stmt = $conn->prepare($sql))
{
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $stmt->bind_result($exp,$branch,$branch_none,$feeddate,$feedrespond,$salutation,$name,$email,$phoneno);
    $stmt->fetch();
    $stmt->close();

}
else
{
    $error = $conn->errno . ' ' . $conn->error;
    echo $error;
}

?>
