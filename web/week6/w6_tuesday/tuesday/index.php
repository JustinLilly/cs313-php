<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
   $first = $_POST['first'];
   $last = $_POST['last'];
   $food = $_POST['food'];

	require("dbConnect.php");
   $db = get_db();
   
   try{
      $query = 'INSERT INTO w6_user (first_name, last_name, foot_type) VALUES (:first, :last, 1)';
      $statement = $db->prepare($query);
      $statement->bindValue(':first', $first);
      $statement->bindValue(':last', $last);
      $statement->bindValue(':food', $food);
      $statement->execute();

      $userId = $db->lastInsertId("w6_user_id_seq");
   }
   catch(Exception $ex) {
      echo "Error with DB. Details: $ex";
      die();
   }
   header("Location: display.php/?personId=$userID");
   die();
?>
<body>
   <div class="container" style="margin-top:50px;">
      <form action="insert.php" method="POST">
         <div class="form-row">
            <div class="col">
               <input type="text" class="form-control" placeholder="First name" name="first">
            </div>
            <div class="col">
               <input type="text" class="form-control" placeholder="Last name" name="last">
            </div>
            <div class="col">
                  <select id="inputFood" class="form-control" name="food">
                     <?php
                        $statement = $db->prepare("SELECT * FROM w6_food");
                        $statement->execute();
                        while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                           $id = $row['id'];
                           $food = $row['food'];
                           echo "<option value='$id'>$food</option>";
                        }
                        // query db
                        // loop through results
                        // output html option for each row
                     ?>
                  </select>
               </div>
               <div class="col">
                  <button class="btn btn-primary" type="submit">Save me some food</button>
               </div>
         </div>
      </form>
   </div>
</body>