<?php
	require_once 'library/dbConnect.php';
	$db = get_db();
	require_once 'model/main-model.php'; 


	$action = filter_input(INPUT_POST, 'action');
	if ($action == NULL){
	 $action = filter_input(INPUT_GET, 'action');
	}

// nav
$events = getEvents();
$eventList = '<ul>';
$eventList .= "<li><a href='./view/add-event.php'>Add New Event</a><br></li>";
$eventList .= "<li><a href='./index.php?action=event-list' title='event list'>Event list</a></li>";

foreach ($events as $event) {
// $eventList .= "<li><a href='index.php?action=event' title='$event[event_name]'>$event[event_name]</a></li>";
//  $eventList .= "<li><a href='./library/display-event.php/?eventId=".urlencode($event['event_id'])."' title='$event[event_name]'>$event[event_name]</a></li>";
}
$eventList .= '</ul>';

// something 'bout users
$users = getUsers();

// something 'bout maps
$uems = getUEMs();

// Do stuff
switch ($action){
	case 'event-list':
		include_once 'view/event-list.php';
		break;
	case 'add-event':
		include_once 'view/add-event.php';
		break;
	case 'edit-event':
		include_once 'view/edit-event.php';
		break;
	case 'add-user':
		include_once 'view/add-user.php';
		break;
	case 'update-user':
		include_once 'view/update-user.php';
		break;
	default:
		include 'view/home.php';
		break;
	}


?>
