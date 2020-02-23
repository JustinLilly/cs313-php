<?php
$eventId = $_POST['event_id'];
$name = $_POST['event_name'];
$date = $_POST['event_date'];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'UPDATE p1_event SET event_name=:name, event_date=:date WHERE event_id = :eventId';
	$statement = $db->prepare($query);
	$statement->bindParam(':eventId', $eventId);
	$statement->bindParam(':name', $name);
	$statement->bindParam(':date', $date);
    $statement->execute();

	// $eventId = $db->lastInsertId("p1_event_event_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: ../index.php/?action=event-list");

die(); 
?>