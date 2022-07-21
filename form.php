<?php
$mysqli_host="www.605classnew.com";
$mysqli_user="gmm";
$mysqli_passport="gmm0119";
$mysqli_database="myfile";
$con = mysqli_connect($mysqli_host,$mysqli_user,$mysqli_passport,$mysqli_database);
if ($con->connect_error) 
{
    die("连接失败: " . $con->connect_error);
} 
else
{
    $sql = "INSERT INTO userinformation (firstname, lastname, email)
    VALUES {$_POST.["username"], $_POST.["passport"], $_POST.["mail"]};
    if ($con->query($sql) === TRUE) 
    {
        echo '新记录插入成功';
    } 
    else 
    {
        echo 'Error:'  . $sql . '<br>' . $con->error;
    }
}
$con->close();
?>