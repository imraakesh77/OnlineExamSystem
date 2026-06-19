<?php

session_start();

include "config/db.php";


if(isset($_POST['login']))
{

    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users 
              WHERE email='$email'";


    $result = mysqli_query($conn,$query);


    if(mysqli_num_rows($result)==1)
    {

        $row = mysqli_fetch_assoc($result);


        if(password_verify($password,$row['password']))
        {

            $_SESSION['user_id']=$row['id'];

            $_SESSION['name']=$row['name'];

            $_SESSION['role']=$row['role'];


            if($row['role']=="admin")
            {
                header(
                "Location:admin/dashboard.php"
                );
            }

            else
            {
                header(
                "Location:student/dashboard.php"
                );
            }

        }

        else
        {
            echo "Wrong Password";
        }


    }

    else
    {
        echo "User Not Found";
    }

}

?>


<!DOCTYPE html>

<html>


<head>

<title>
Login
</title>

</head>



<body>


<h2>
Login Page
</h2>



<form method="POST">


Email:
<br>

<input 
type="email"
name="email"
required>


<br><br>


Password:
<br>


<input
type="password"
name="password"
required>


<br><br>


<button 
type="submit"
name="login">

Login

</button>


</form>


</body>

</html>