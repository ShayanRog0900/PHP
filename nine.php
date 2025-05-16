<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<?php
    include ("./ten.php");
    $alert = "";
    if (isset($_POST["submit"])){
    $NAME = $_POST['NAME'];
    $EMAIL = $_POST['EMAIL'];
    $PASSWORD = $_POST['PASSWORD'];
    $IMAGE = $_FILES['IMAGE']['name'];

    if(!empty($NAME) && !empty($EMAIL) && !empty($PASSWORD) && !empty($IMAGE)){
        $sql = "insert into data (NAME ,EMAIL,PASSWORD,IMAGE) values ('$NAME','$EMAIL','$PASSWORD','$IMAGE')";
        $result = $conn->query($sql);

        if (isset($_FILES)){
            $file_name = $_FILES['IMAGE']['name'];
            $file_typt = $_['IMAGE']['type'];
            $file_size = $_FILES['IMAGE']['size'];
            $file_tmp = $_FILES['IMAGE']['tmp_name'];
            move_uploaded_file($file_tmp,"uplode/" .$file_name);
        }

        if ($result == true){
            $alert = "<div class='alert alert-primary'>your form has been submitted successfully!</div>";
        }
        else{
            $alert = "<div class='alert alert-danger'>error while submitting the form , please try again!</div>";
        }
    }
    else{
        $alert = "<div class='alert alert-danger'>Please Fill all the fields</div>";
    }

    };

    echo $alert

?>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto mt-5 fw-b">

                <form action="" method="post" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label for="">NAME</label>
                        <input type="text" name="NAME" placeholder="ENTER YOUR NAME" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">EMAIL</label>
                        <input type="email" name="EMAIL" placeholder="ENTER YOUR EMAIL" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">PASSWORD</label>
                        <input type="text" name="PASSWORD" placeholder="ENTER YOUR PASSWORD" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">SELECT YOUR IMAGE</label>
                        <input type="file" name="IMAGE" placeholder="ENTER YOUR NUMBER" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-outline-primary text-auto" name="submit">SUBMIT</button>
                    </div>
                </form>

                <?php
                
                echo "<pre>";
                print_r($_POST);

                echo "<pre>";
                print_r($_FILES);

                
                ?>

            </div>
        </div>
    </div>



</body>
</html>