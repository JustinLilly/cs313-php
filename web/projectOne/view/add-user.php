<!doctype html>
<html lang="en_us">
<?php include $_SERVER ['DOCUMENT_ROOT'] . '/cs313-php/web/projectOne/modules/head.php'; ?>
<body>
  <main>
    <form action="insert-user.php" method="POST">
      <label for="first_name">First Name:</label>
      <input type="text" name="first_name" id="first_name"><br>
      <label for="last_name">Last Name:</label>
      <input type="text" name="last_name" id="last_name"><br>
      <input type="submit" value="Add User">
    </form>
  </main>
</body>
</html>