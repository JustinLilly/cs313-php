<?php
$name = $_POST['event_name'];
$date = $_POST['event_date'];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO p1_event (event_name, event_date) VALUES (:name, :date)';
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name);
	$statement->bindValue(':date', $date);
    $statement->execute();

	$eventId = $db->lastInsertId("p1_event_event_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: display-event.php/?eventId=$eventId");

die(); 
?>