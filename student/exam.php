<?php

session_start();

include "../config/db.php";


$query="SELECT * FROM questions";


$result=mysqli_query($conn,$query);


?>


<html>

<body>


<h2>
Online Exam
</h2>


<form method="POST" action="submit_exam.php">


<?php


while($row=mysqli_fetch_assoc($result))
{

?>


<h3>

<?php echo $row['question']; ?>

</h3>



<input 
type="radio"
name="answer[<?php echo $row['id']; ?>]"
value="<?php echo $row['option1']; ?>"
>

<?php echo $row['option1']; ?>


<br>



<input
type="radio"
name="answer[<?php echo $row['id']; ?>]"
value="<?php echo $row['option2']; ?>"
>

<?php echo $row['option2']; ?>



<br>



<input
type="radio"
name="answer[<?php echo $row['id']; ?>]"
value="<?php echo $row['option3']; ?>"
>

<?php echo $row['option3']; ?>



<br>



<input
type="radio"
name="answer[<?php echo $row['id']; ?>]"
value="<?php echo $row['option4']; ?>"
>

<?php echo $row['option4']; ?>



<br><br>



<?php

}

?>



<button type="submit">

Submit Exam

</button>


</form>


</body>


</html>