<?php


include "../config/db.php";


$id = $_GET['id'];


$query = "DELETE FROM questions 
WHERE id=$id";


if(mysqli_query($conn,$query))
{

header(
"Location:view_questions.php"
);

}


?>