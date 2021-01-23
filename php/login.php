<?php
    if(isset($_POST['username']) && isset($_POST['password'])){

        include 'config.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username)){
            header("Location: ../pages/login_page.php?error=Username is rquired");
            exit();
        }

        else if(empty($password)){
            header("Location: ../pages/login_page.php?error=Password is rquired");
            exit();
        }

        else{
                $retrivedata = "SELECT * FROM registration where username='$username';";
                $result = mysqli_query($conn,$retrivedata);

                if(mysqli_num_rows($result)==1){
                    header("Location: ../index_page.php");
                }

                else{
                    header("Location: ../pages/login_page.php?error=Invalid Credentils");
                }
        }
    }

    else{
        header("Location: ../pages/login_page.php");
        exit();
    }