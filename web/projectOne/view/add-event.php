<!doctype html>
<html lang="en_us">
<?php include $_SERVER ['DOCUMENT_ROOT'] . '/cs313-php/web/projectOne/modules/head.php'; ?>
<body>
  <main>
    <h1>Add Event</h1>
    <form action="insert-event.php" method="POST">
      <label for="event_name">Event Name:</label>
      <input type="text" name="event_name" id="event_name">
      <label for="event_date">Date:</label>
      <input type="date" name="event_date" id="event_date">
      <input type="submit" value="Add Event">
    </form>
  </main>
</body>
</html>