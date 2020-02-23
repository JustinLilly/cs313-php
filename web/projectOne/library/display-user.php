<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            $personId = $_GET['personId'];
            $statement = $db->prepare('SELECT * FROM p1_user WHERE user_id = :personId');
            $statement->bindValue(':personId', $personId);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $id      = $row['user_id'];
               $first_name   = $row['first_name'];
               $last_name   = $row['last_name'];
               $email = $row['email'];

               $users = $db->prepare("SELECT first_name, last_name, email FROM p1_user WHERE user_id = $id");
               $users->execute();
               while ($uRow = $users->fetch(PDO::FETCH_ASSOC))
               {
                  $first_name = $uRow['first_name'];
                  $last_name = $uRow['last_name'];
                  $email = $uRow['email'];
               }
               echo "<h1>$first_name $last_name : $email</h1>";
            }
         ?>
		</div>
	</body>
</html>