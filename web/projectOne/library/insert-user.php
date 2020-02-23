<?php
$first = $_POST['first_name'];
$last = $_POST['last_name'];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO p1_user (first_name, last_name) VALUES (:first, :last)';
	//$query = 'INSERT INTO p1_uem_table (user_id, event_id) VALUES ()';
	$statement = $db->prepare($query);
	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
	$statement->execute();
	
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	$userId = $db->lastInsertId("p1_user_user_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: display-user.php/?personId=$userId");

die(); 
?>