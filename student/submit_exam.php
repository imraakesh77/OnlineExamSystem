<?php

session_start();

include "../config/db.php";


$score = 0;

$total = 0;


$answers = $_POST['answer'];



foreach($answers as $question_id=>$student_answer)
{


$query="SELECT answer FROM questions 
WHERE id=$question_id";


$result=mysqli_query($conn,$query);


$row=mysqli_fetch_assoc($result);



if($student_answer == $row['answer'])
{

$score++;

}


$total++;


}



$user_id=$_SESSION['user_id'];



$insert="INSERT INTO results
(user_id,score,total_questions)

VALUES

($user_id,$score,$total)";



mysqli_query($conn,$insert);



echo "<h2>Exam Completed</h2>";

echo "Your Score : ";

echo $score;

echo " / ";

echo $total;


?>