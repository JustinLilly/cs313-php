<?php
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO p1_user (first_name, last_name, email) VALUES (:first, :last, :email)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
	$statement->bindValue(':email', $email);
	$statement->execute();
	
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	$userId = $db->lastInsertId("p1_user_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: display.php/?personId=$userId");

die(); 
?>