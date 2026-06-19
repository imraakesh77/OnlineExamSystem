<?php

session_start();


if(!isset($_SESSION['user_id']))
{

header("Location:../login.php");

exit();

}

?>


<html>


<head>


<link rel="stylesheet" href="../css/style.css">


</head>



<body>


<div class="container">


<h2>

Welcome Student 
<?php echo $_SESSION['name']; ?>

</h2>



<a class="btn" href="exam.php">

Start Exam

</a>



<a class="btn" href="result.php">

View Result

</a>



<a class="btn logout" href="../logout.php">

Logout

</a>



</div>


</body>


</html>