<!doctype html>
<html lang="en_us">
<head>
  <meta charset="utf-8">
  <title>Fantastic Gift Exchange Manager</title>
  <meta name="description" content="cs313 project one">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Justin Lilly">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
  <main>
      <header>
          <?php include $_SERVER ['DOCUMENT_ROOT'] . '/cs313-php/web/week2/common/header.php'; ?>
          <nav id="page-nav"></nav>

          <form action="insert.php" method="$_POST">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
            <input type="submit" value="Add User">
          </form>


      </header>
  </main>
</body>
</html>