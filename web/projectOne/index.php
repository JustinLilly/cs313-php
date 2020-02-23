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
foreach ($events as $event) {
 $eventList .= "<li><a href='./library/display-event.php/?eventId=".urlencode($event['event_id'])."' title='$event[event_name]'>$event[event_name]</a></li>";
}
$eventList .= '</ul>';


// Do stuff
switch ($action){
	case 'event':
		include_once 'view/event-list.php';
		break;
	case 'add-event':
		include_once 'view/add-event.php';
		break;
	case 'update-event':
		include_once 'view/update-event.php';
		break;
	case 'user':
		include_once 'view/user-list.php';
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
