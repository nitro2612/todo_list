<?php

    require_once 'database.php';

    if(!empty($_POST['register_first_name']) && !empty($_POST['register_last_name']) && !empty($_POST['register_username'])
        && !empty($_POST['register_email']) && !empty($_POST['register_birthday']) && !empty($_POST['register_email_r']) && !empty($_POST['register_password']) && !empty($_POST['register_password_r']))
    {
        if($_POST['register_password'] == $_POST['register_password_r'] && $_POST['register_email'] == $_POST['register_email_r'])
        {
            $first_name = $_POST['register_first_name'];
            $last_name = $_POST['register_last_name'];
            $username = $_POST['register_username'];
            $date_of_birth = $_POST['register_birthday'];
            $email = $_POST['register_email'];
            $password = $_POST['register_password'];

            echo 'First name: ' . $first_name . "<br />";
            echo 'Last name: ' . $last_name . "<br />";
            echo 'Username: ' . $username . "<br />";
            echo 'E-Mail: ' . $email . "<br />";
            echo 'Password: ' . $password . "<br />";

            $con = new DB_connection();

            $sql = "INSERT INTO users (first_name, last_name, username, email, password, date_of_birth, authority) 
                    VALUES ('$first_name', '$last_name', '$username', '$email', '$password', '$date_of_birth', 'user')";

            if($con->getConnection()->query($sql) === true)
            {
                //TODO:Erfolgsmeldung
            }
            else
            {
                //TODO: Fehlermeldung
                $con->getConnection()->close();
            }

        }
        else
        {
            echo 'Error: E-Mail Addresses or passwords do not match';
        }
    }
    else
    {
        echo "Error: Please fill out all required fields.";
    }