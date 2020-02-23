<?php 
    $userId = (String)trim($_GET['user_id']);
    $user = $users->find($userId);
    if(!$user) {
        $_SESSION['msg_error'] =  'User not found';
        header('Location: ?page=users');
        exit;
    }
?>

<!doctype html>
<html lang="en_us">
<?php include $_SERVER ['DOCUMENT_ROOT'] . '/cs313-php/web/projectOne/modules/head.php'; ?>
<body>
  <main>
    <form action="?type=user&action=update" method="POST">

      <label for="first_name">First Name:</label>
      <input type="text" name="first_name" id="first_name"><br>

      <label for="last_name">Last Name:</label>
      <input type="text" name="last_name" id="last_name"><br>

      <input type="submit" value="Add User">
    </form>
  </main>
  <?php include $_SERVER ['DOCUMENT_ROOT'] . '/cs313-php/web/projectOne/modules/footer.php'; ?>
</body>
</html>