<?php

session_start();


if(!isset($_SESSION['user_id']))
{

header("Location:../login.php");

exit();

}



if($_SESSION['role']!="admin")
{

header("Location:../student/dashboard.php");

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

Admin Dashboard

</h2>



<a class="btn" href="add_question.php">

Add Question

</a>



<a class="btn" href="view_questions.php">

Manage Questions

</a>



<a class="btn" href="results.php">

Leaderboard

</a>



<a class="btn logout" href="../logout.php">

Logout

</a>



</div>


</body>


</html>