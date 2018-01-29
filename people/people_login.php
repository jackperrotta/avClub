<?php include '../view/header.php';?>

        <!-- <form action="index.php?type=" method="post">

            <div id="data">
                <label for="username">User name:</label>
                <input type="text" name="username" id="username"><br>
                <label for="username">Password:</label>
                <input type="password" name="password" id="password">
            </div>

            <div id="buttons">
                <label>&nbsp;</label> name="go_button"><br>
            </div>

            <div id="message">

            </div>
        </form> -->
        <div class="row">
          <div class="col-md-5 mx-auto text-center">
            <form class="form-signin" action="index.php?type=<?php echo $type;?>" method="post">
              <h1 class="h3 mb-3 font-weight-normal text-capitalize"><?php echo $type;?> Sign In</h1>
              <div id="message">
                  <?php echo $message;?>
              </div>
              <label for="username" class="sr-only">Username</label>
              <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>

              <label for="password" class="sr-only">Password</label>
              <input type="password" id="password" name="password" class="form-control my-2" placeholder="Password" required>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit" name="go_button">Sign In</button>
              <p>&nbsp;</p>
              <p><a href='../index.php'>Go back</a></p>
            </form>
          </div>
        </div>




<?php include '../view/footer.php';?>
