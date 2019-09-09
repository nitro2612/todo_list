<?php
    require_once 'database.php';

    if(!empty($_POST['login_username']) && !empty($_POST['login_password']))
    {
        $con = new DB_connection();

        $username_form = $_POST['login_username'];
        $password_form = $_POST['login_password'];

        $sql = "SELECT * from users WHERE username='$username_form'";
        $result = $con->getConnection()->query($sql);

        if($result  == true)
        {
            $row = mysqli_fetch_array($result);
            if($password_form == $row[5])
            {
                session_start();
                $_SESSION['userid'] = $row[0];
                $_SESSION['first_name'] = $row[1];
                $_SESSION['last_name'] = $row[2];
                $_SESSION['username'] = $row[3];
                $_SESSION['email'] = $row[4];
                $_SESSION['date_of_birth'] = $row[6];
                $_SESSION['created_at'] = $row[7];
                $_SESSION['last_updated_at'] = $row[8];
                $_SESSION['role'] = $row[9];
                header('refresh:2; url=../index.php');
            }
            else
            {
                echo 'Error: Password incorrect!';
            }

        }
        else
        {
            echo 'Error: User does not exist!';
            //TODO:: Create Error message
        }
    }

?>