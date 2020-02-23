<?php
	require("dbConnect.php");
	$db = get_db();
    include $_SERVER ['DOCUMENT_ROOT'] . '/cs313-php/web/projectOne/modules/head.php'; ?>
    
	<body>
		<div class="container">
         <?php
            $eventId = $_GET['eventId'];
            $statement = $db->prepare('SELECT * FROM p1_event WHERE event_id = :eventId');
            $statement->bindValue(':eventId', $eventId);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $id      = $row['event_id'];
               $event_name   = $row['event_name'];
               $event_date   = $row['event_date'];

               $events = $db->prepare("SELECT event_name, event_date FROM p1_event WHERE event_id = $id");
               $events->execute();
               while ($eRow = $events->fetch(PDO::FETCH_ASSOC))
               {
                  $event_name = $eRow['event_name'];
                  $event_date = $eRow['event_date'];
               }
               echo "<h1>$event_name $event_date</h1>";
            }
         ?>
        
    </body>
    <?php include $_SERVER ['DOCUMENT_ROOT'] . '/cs313-php/web/projectOne/modules/footer.php'; ?>
</html>


<!-- 
    input new users that get added to user table and uem table paired to an event
    select list of users from uem table
    create assignment algorithm
    update uem table with assignments
 -->