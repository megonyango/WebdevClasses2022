<?php
//check if user is logged in.
session_start();

if (!isset($_SESSION["loggedin"]) or  $_SESSION["loggedin"]!==true){
    header("location:login.php");
    exit();
}



include "header.php";
include "config.php";

if (isset($_POST["submit"]) and !empty($_POST["id"])){

    $id =$_POST["id"];

    echo $sql ="DELETE FROM `students` WHERE id=$id";

    $result = mysqli_query($link,$sql);

    if ($result){
        echo "you deleted the record";
        header("location:documents.php");
    }else{
        echo "error executing your query $sql".mysqli_error($link);
    }


}else{
    echo " ";
}



?>

<div class="row m-2 p-2">
    <div class="alert alert-danger">
        <form action="delete.php" method="post">
            <div class="p-2 text-center">
                <label class="form-label ">Are you sure you want to delete this record?</label>
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

            </div>
            <div class="p-2 text-center">
                <input class="col-md-3  btn btn-danger" type="submit" value="YES" name="submit">
                <a class="col-md-3 btn btn-primary" href="documents.php">NO</a>
            </div>

        </form>
    </div>

    </body>
    </html>
</div>