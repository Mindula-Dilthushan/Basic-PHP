<?php
$con = mysqli_connect(
    'localhost',
    'root',
    '1023',
    'testingphp'
);

$userid = $_POST['userid'];
$username = $_POST['username'];
$usernumber = $_POST['usernumber'];
$useraddress = $_POST['useraddress'];

$sql = "INSERT INTO `user` (`userid`, `username`, `usernumber`, `useraddress`) VALUES ('$userid', '$username', '$usernumber', '$useraddress')";

$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "User Save Now";
}
?>