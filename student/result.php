<?php

session_start();

include "../config/db.php";


$user_id=$_SESSION['user_id'];


$query="SELECT * FROM results

WHERE user_id=$user_id

ORDER BY id DESC

LIMIT 1";


$result=mysqli_query($conn,$query);


$row=mysqli_fetch_assoc($result);


?>


<html>

<body>


<h2>
My Result
</h2>


Name:

<?php

echo $_SESSION['name'];

?>


<br><br>


Score:

<?php

echo $row['score'];

?>

/

<?php

echo $row['total_questions'];

?>


<br><br>


Date:

<?php

echo $row['exam_date'];

?>


</body>

</html>