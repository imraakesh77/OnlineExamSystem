<?php

include "../config/db.php";


$id=$_GET['id'];



$query="SELECT * FROM questions 
WHERE id=$id";


$result=mysqli_query($conn,$query);


$row=mysqli_fetch_assoc($result);



if(isset($_POST['update']))
{


$question=$_POST['question'];

$op1=$_POST['option1'];

$op2=$_POST['option2'];

$op3=$_POST['option3'];

$op4=$_POST['option4'];

$answer=$_POST['answer'];



$update="UPDATE questions SET

question='$question',

option1='$op1',

option2='$op2',

option3='$op3',

option4='$op4',

answer='$answer'

WHERE id=$id";



if(mysqli_query($conn,$update))
{

header(
"Location:view_questions.php"
);

}


}



?>


<html>


<body>



<h2>

Edit Question

</h2>



<form method="POST">


Question:

<br>


<textarea name="question">

<?php echo $row['question']; ?>

</textarea>



<br><br>


Option1:

<input 
type="text"
name="option1"
value="<?php echo $row['option1']; ?>"
>


<br><br>


Option2:


<input
type="text"
name="option2"
value="<?php echo $row['option2']; ?>"
>


<br><br>



Option3:


<input
type="text"
name="option3"
value="<?php echo $row['option3']; ?>"
>


<br><br>



Option4:


<input
type="text"
name="option4"
value="<?php echo $row['option4']; ?>"
>


<br><br>


Correct Answer:


<input
type="text"
name="answer"
value="<?php echo $row['answer']; ?>"
>



<br><br>


<button name="update">

Update Question

</button>


</form>


</body>


</html>