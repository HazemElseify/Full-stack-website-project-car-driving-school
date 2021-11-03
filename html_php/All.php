<?php
class All
{
    function insertLocalTutor($id, $fristname, $lastname, $age, $password, $email)
    {
        $con = mysqli_connect('localhost', 'root', '', 'SW');
        if (!$con) {
            echo "not connected to the server";
        }
        if (!mysqli_select_db($con, 'SW')) {
            echo "database not selected";
        }
        $sql = "INSERT INTO person (id,fristname,lastname,age,password,email) VALUES('$id','$fristname','$lastname','$age','$password','$email')";
        if (!mysqli_query($con, $sql)) {

            header("location: Admin.php?Addtutor=Error");

        } else {
            header("location: Admin.php?Addtutor=success");

            exit();
        }

    }

}
{
    $mysql = new mysqli('localhost', 'root', '', 'SW');
    $result = $mysql->query("SELECT * FROM remotetutor WHERE flag=0") or die($mysql->error);
}

if(isset($_GET['disapprove'])){
    $no=$_GET['disapprove'];
    $mysql->query("DELETE FROM remotetutor WHERE no =$no")or die($mysql->error);
    header("location: Admin0.php");
}
if(isset($_GET['Approve'])){
    $no=$_GET['Approve'];
    $mysql->query("UPDATE remotetutor SET flag=1 where no=$no")or die($mysql->error);
    header("location: Admin0.php");
}


