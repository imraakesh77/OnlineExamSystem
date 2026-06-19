<?php

include "config/db.php";

if(isset($_POST['register']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $hashPassword = password_hash(
        $password,
        PASSWORD_DEFAULT
    );


    $query = "INSERT INTO users(name,email,password)
    VALUES('$name','$email','$hashPassword')";


    if(mysqli_query($conn,$query))
    {
        echo "Registration Successful";
    }
    else
    {
        echo "Registration Failed";
    }

}

?>


<!DOCTYPE html>

<html>

<head>

<title>
Register
</title>

</head>


<body>


<h2>
Student Registration
</h2>


<form method="POST">


Name:
<br>

<input 
type="text" 
name="name"
required>


<br><br>


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
name="register">

Register

</button>


</form>


</body>

</html>