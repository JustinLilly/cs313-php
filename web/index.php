<!doctype html>
<html lang="en_us">
<head>
  <meta charset="utf-8">
  <title>Home page</title>
  <meta name="description" content="cs313 home page">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Justin Lilly">
  <link href="/cs313-php/web/css/styles.css" rel="stylesheet" type="text/css" media="screen">
<body>
  <main>
      <header>
          <?php include $_SERVER ['DOCUMENT_ROOT'] . '/cs313-php/web/common/header.php'; ?>
          <nav id="page-nav">
              <li><a href="/cs313-php/web/intro.php" title="Introduction">Intro to me</a></li>
              <li><a href="/cs313-php/web/assignments.php" title="Assignments directory">Assignments</a></li>
          </nav>
      </header>
  </main>
</body>
</html>