<?php include '../view/header.php'?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <form action="index.php" method="post">

      <div class="form-group text-center mb-3">
        <legend class="text-capitalize">Hello <?php echo $username;?> </legend>
        <p>Not <?php echo $username;?>? <a href="../">Logout</a></p>
        <input type="hidden" name="first_name" value="<?php echo $username; ?>">
        <input type="hidden" name="last_name" value="<?php echo $teacher_id; ?>">
      </div>

      <div class="form-group">
        <label for="room">Room:</label>
        <input class="form-control" type="text" id="room" name="room" value="<?php echo $room; ?>">
        <br>
        <label for="problem_type">Problem Type:</label>
        <select id="problem_type" name="problem_type" class="form-control">
            <option value=''>Please make a choice</option>
            <?php foreach ($requestTypes as $request) {
              $request_name = $request['problem_type'];

              echo "<option>"
              . $request_name
              ."</option>";
            }
            ?>

        </select><br>
        <label for="comment">Comment:</label>
        <textarea  class="form-control" id="comment" name="comment" height="5" width="30"><?php echo $comment;?></textarea>

      </div>
      <br>

      <button class="btn btn-primary" type="submit" name="ADDREQUEST">Add Request</button>
      <!-- <input type="submit" value="Add Request" name="ADDREQUEST"> -->
      <br>

      <p class="error"><?php echo $message;?></p>
      </form>
    </div>
  </div>

<?php include '../view/footer.php'?>
