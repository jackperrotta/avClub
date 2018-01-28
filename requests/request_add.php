<?php include '../view/header.php'?>
    <form action="index.php" method="post">
        
    <fieldset>
    <legend>Your Username</legend>
    <p><?php echo $username;?></p>
    <input type="hidden" name="first_name" value="<?php echo $username; ?>">
    <input type="hidden" name="last_name" value="<?php echo $teacher_id; ?>">       
    </fieldset>
    <br>
    <br>
        
    <fieldset>
    <label for="room">* Room:</label> <input type="text" id="room" name="room" value="<?php echo $room; ?>"><br>
    <label for="problem_type">* Problem Type:</label> 
    <select id="problem_type" name="problem_type">
        <option value=''>Please make a choice</option>
        <?php 
            foreach ($requestTypes as $type){
                echo "<option>"
                . ""
                . ""
            }
        ?>
    </select><br>
    <label for="comment">Comment:</label> 
    <textarea id="comment" name="comment" height="5" width="30"><?php echo $comment;?></textarea>
    
    </fieldset>
    <br>  
    <br>  
        
    <div id="buttons">
    <input type="submit" value="Add Request" name="ADDREQUEST">
    <br>
    </div>
        
    <p class="error"><?php echo $message;?></p>
    </form>
<?php include '../view/footer.php'?>