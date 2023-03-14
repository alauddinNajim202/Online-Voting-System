<?php   

    include("connection.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $image = $_FILES['name']['photo'];
    $tmp_name = $_FILES['tmp_name']['photo'];
    $role = $_POST['role'];

    if($password == $cpassword){    

        move_uploaded_file($tmp_name, "../uploads $image");

        $insert = mysqli_query($connect,"INSERT INTO user(name, mobile,password,address,photo,roles,status,votes) 
        values('$name','$mobile','$password','$address','$image', '$role',0, 0)");

        if($insert){    
            echo '
            <script>
                alert("Registion Successfully!");
                window.location = "../";
            
            </script>
        ';

        }else{
            echo '
            <script>
                alert("Some errors occurs!");
                window.location = "../routes/register.html";
            
            </script>
        ';
        }

    }else{
        echo '
            <script>
                alert("Password and Confirm password not match!");
                window.location = "../routes/register.html";
            
            </script>
        ';
    }



?>