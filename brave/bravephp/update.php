<?php
include "connect.php";

if (isset($_POST["submit"]) and !empty($_POST["id"])){

    #updating here
    $id=$_POST["id"];
    $up_firstName=$_POST["firstName"];
    $up_secondName = $_POST["secondName"];

    $up_sql= "UPDATE `detail` SET `firstName`='$up_firstName',`secondName`='$up_secondName' WHERE id=$id ";

    $up_result= mysqli_query($link,$up_sql);

    if ($up_result){
        echo "Record has been updated";
        header("location:select.php");
    }else{
        echo "error updating record $up_sql".mysqli_error($link);
    }


} else{

    if (isset($_GET["id"]) and  !empty($_GET["id"])){

        $id = $_GET["id"];

        $sql = "SELECT * FROM `detail` WHERE id=$id";
        $result = mysqli_query($link,$sql);

        if ($result){

            $data = mysqli_num_rows($result);

            if ($data==1){

                $row = mysqli_fetch_array($result);

                $firstName = $row["firstName"];
                $secondName = $row["secondName"];

            }



        }else{
            echo "Error executing query $sql".mysqli_error($link);
        }

    }


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UPDATE</title>
</head>
<body>

  <h2>UPDATE THIS RECORD</h2>
<form action="update.php" method="post">
    <div>
        <label> First Name</label>
        <input type="text" name="firstName" value="<?php echo $firstName;?>">

    </div>
    <div>
        <label> Second Name</label>
        <input type="text" name="secondName" value="<?php echo $secondName;?>">

    </div>
    <div>
        <label> ID</label>
        <input type="text" name="id" value="<?php echo $_GET["id"]; ?>">

    </div>

    <input type="submit" name="submit" value="Update">

</form>


</body>
</html>
