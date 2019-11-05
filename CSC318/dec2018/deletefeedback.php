<?php
include 'dbconnect.php';

$id = $_GET['id'];

$sql = "DELETE FROM feedback WHERE id=?";

if($stmt = $conn->prepare($sql))
{
    $stmt->bind_param('i',$id);
    $stmt->execute();
    if($stmt->affected_rows<0)
        echo "Failed to remove data";
    else
        echo "Successfull";
    $stmt->close();
    
}
else
{
    $error = $conn->errno . ' ' . $conn->error;
    echo $error;
}

?>