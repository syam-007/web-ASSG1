<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'config.php';
    $sql=mysqli_query($conn,"SELECT * FROM register where fldUsername='$fldUsername' and fldPassword='$fldPassword'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Id"] = $row['Id'];
        $_SESSION["fldUsername"]=$row['fldUsername'];
        $_SESSION["fldEmail"]=$row['fldEmail'];
        $_SESSION["fldPhone"]=$row['fldPhone'];
        $_SESSION["fldPassword"]=$row['fldPassword']; 
        header("Location: index.html"); 
    }
    else
    {
        echo "InvalId fldEmail Id/Password";
    }
}
?>