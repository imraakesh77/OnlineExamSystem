<?php

session_start();

include "../config/db.php";


$query = "SELECT * FROM questions";


$result = mysqli_query($conn,$query);


?>


<html>

<body>


<h2>
All Questions
</h2>


<table border="1">

<tr>

<th>ID</th>

<th>Question</th>

<th>Answer</th>

<th>Action</th>

</tr>



<?php


while($row = mysqli_fetch_assoc($result))
{

?>


<tr>


<td>

<?php echo $row['id']; ?>

</td>



<td>

<?php echo $row['question']; ?>

</td>




<td>

<?php echo $row['answer']; ?>

</td>




<td>


<a href="edit_question.php?id=<?php echo $row['id']; ?>">

Edit

</a>


 | 


<a href="delete_question.php?id=<?php echo $row['id']; ?>">

Delete

</a>


</td>



</tr>


<?php

}

?>


</table>


</body>


</html>