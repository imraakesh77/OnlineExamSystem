<?php

session_start();

include "../config/db.php";


if(isset($_POST['add']))
{

$question = $_POST['question'];

$op1 = $_POST['option1'];
$op2 = $_POST['option2'];
$op3 = $_POST['option3'];
$op4 = $_POST['option4'];

$answer = $_POST['answer'];



$query = "INSERT INTO questions
(question,option1,option2,option3,option4,answer)

VALUES

('$question','$op1','$op2','$op3','$op4','$answer')";


if(mysqli_query($conn,$query))
{
echo "Question Added";
}

else
{
echo "Failed";
}


}

?>


<html>

<body>


<h2>
Add Question
</h2>



<form method="POST">


Question:

<br>

<textarea name="question"></textarea>


<br><br>


Option 1:

<input 
type="text"
name="option1">


<br><br>


Option 2:

<input 
type="text"
name="option2">


<br><br>


Option 3:

<input 
type="text"
name="option3">


<br><br>


Option 4:

<input 
type="text"
name="option4">


<br><br>


Correct Answer:

<input 
type="text"
name="answer">


<br><br>


<button 
name="add">

Add Question

</button>


</form>


</body>

</html>