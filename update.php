<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job Registration</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>

        <div class="container-fluid justify-content-center row">
                <div class="col-12 text-center">
                    <h1>Job Registration</h1>
                </div>
                <div class="col-md-6">
                    bgbfgng
                </div>
                <div class="col-md-6 text-center">
            <form action="" method="POST">

                 <?php 
                    include "connection.php";

                    $updateID=$_GET['id'];

                    $select= "select * from jobapplication where id=$updateID";
                    $showdata=mysqli_query($con,$select);
                    $arrData= mysqli_fetch_array($showdata);
                ?>

                <input type="text" placeholder="Enter your name" name="name" value="<?php echo $arrData['name']?>">
                <input type="text" placeholder="Enter your qualification" name="degree" value="<?php echo $arrData['degree']?>"><br>
                <input type="number" placeholder="Enter your mobile" name="mobile" value="<?php echo $arrData['mobile']?>">
                <input type="email" placeholder="Enter your email" name="email" value="<?php echo $arrData['email']?>"><br>
                <input type="text" placeholder="Enter your references" name="reference" value="<?php echo $arrData['refer']?>">
                <input type="text" placeholder="Enter your jobpost" name="profile" value="<?php echo $arrData['jobPost']?>"><br>

                <input type="submit" name="update" value="Update" class="btn btn-success"><br>
                
            </form>
        </div>
        <div class="col-12 text-center">
        <a href="./index.php"><input type="button" value="Add New Item" class="btn btn-primary"></a>
        <a href="./display.php"><input type="button" value="Check Form" class="btn btn-primary"></a>
            </div>
     </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="./script.js"></script>
    </body>
</html>

<?php

if(isset($_POST['update'])){
    $updateID=$_GET['id'];
    $name= $_POST['name'];
    $degree= $_POST['degree'];
    $mobile= $_POST['mobile'];
    $email= $_POST['email'];
    $reference= $_POST['reference'];
    $profile= $_POST['profile'];

    $updatequery= " update jobapplication SET name='$name',degree='$degree',mobile='$mobile',email='$email',refer='$reference',jobPost='$profile' where id=$updateID";

    mysqli_query($con,$updatequery);
    header('location:display.php');
}
?>