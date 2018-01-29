<?php include '../view/header.php'?>
<div class="row mx-auto text-center my-4">
  <div class="col">
    <p>Got it.  Help is on the way!</p>
    <p>Your confirmation number is <?php echo $confirmation ?>
    <form action="index.php" method="post">
    <input type="submit" value="Logout" name="btn_logout">
    <br>
    </form>
  </div>
</div>

<?php include '../view/footer.php'?>
