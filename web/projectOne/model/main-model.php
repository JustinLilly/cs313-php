<?php
// Event model

function getEvents(){
    $db = get_db(); 
    $sql = 'SELECT event_name, event_id FROM p1_event ORDER BY event_name ASC'; 
    $stmt = $db->prepare($sql);
    $stmt->execute(); 
    $events = $stmt->fetchAll(); 
    $stmt->closeCursor(); 
    return $events;
   }

   ?>