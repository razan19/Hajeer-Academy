<?php

function check_login($con)
{
    if (isset($_SESSION['email'])) {

        $email = $_SESSION['email'];

        $query = "select * from admin where email='$email' limit 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0){
            $admin_data = mysqli_fetch_assoc($result);
            return $admin_data;
        }

    }

header("Location: ../en/login.php");
die;

}
