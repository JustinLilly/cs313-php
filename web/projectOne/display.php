<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            $personId = $_GET['personId'];
            $statement = $db->prepare('SELECT * FROM p1_user WHERE Id = :personId');
            $statement->bindValue(':personId', $personId);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $id      = $row['user_id'];
               $first_name   = $row['first_name'];
               $last_name   = $row['last_name'];
               $email = $row['email'];

               $foods = $db->prepare("SELECT first_name, last_name FROM p1_user WHERE ID = $food_id");
               $foods->execute();
               while ($fRow = $foods->fetch(PDO::FETCH_ASSOC))
               {
                  $food = $fRow['food'];
               }
               echo "<h1>$first $last's favorite food is $food</h1>";
            }
         ?>

		</div>
	</body>
</html>