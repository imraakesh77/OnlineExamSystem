<?php

session_start();

include "../config/db.php";


$query = "

SELECT 

users.name,

results.score,

results.total_questions,

results.exam_date


FROM results


JOIN users

ON results.user_id = users.id


ORDER BY results.score DESC

";


$result=mysqli_query($conn,$query);


?>


<html>


<body>


<h2>

Student Results

</h2>



<table border="1">


<tr>

<th>Rank</th>

<th>Name</th>

<th>Score</th>

<th>Date</th>


</tr>



<?php


$rank=1;


while($row=mysqli_fetch_assoc($result))
{

?>


<tr>


<td>

<?php echo $rank++; ?>

</td>



<td>

<?php echo $row['name']; ?>

</td>



<td>

<?php

echo $row['score'];

echo "/";

echo $row['total_questions'];

?>

</td>




<td>

<?php echo $row['exam_date']; ?>

</td>



</tr>



<?php

}

?>



</table>


</body>


</html>