<?php
$first = $_POST['first_name'];
$last = $_POST['last_name'];

$uem_user_id = $_POST[''];
$uem_event_id = $_POST[''];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO p1_user (first_name, last_name) VALUES (:first, :last)';
	//$query = 'INSERT INTO p1_uem_table (uem_user_id, uem_event_id) VALUES (:uem_user_id, :uem_event_id)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
	// $statement->bindValue(':uem_user_id', $uem_user_id);
	// $statement->bindValue(':uem_event_id', $uem_event_id);
	$statement->execute();
	
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	$userId = $db->lastInsertId("p1_user_user_id_seq");
	//$uemId = $db->lastInsertId("p1_user_event_map_uem_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: display-user.php/?personId=$userId");

die(); 
?>