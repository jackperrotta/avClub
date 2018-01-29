<?php include 'common/configuration.php'?>
<?php include 'view/header.php'?>

<div class="card-deck mb-3 mt-3 text-center">
  <div class="card mb-4 box-shadow">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Teachers</h4>
    </div>
    <div class="card-body">
      <br>
      <h5 class="card-title pricing-card-title">Login to Make Requests</h5>
      <br>
      <!-- <ul class="list-unstyled mt-3 mb-4">
        <li>10 users included</li>
        <li>2 GB of storage</li>
        <li>Email support</li>
        <li>Help center access</li>
      </ul> -->
      <a href="people/index.php?type=teacher">
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Teacher Login</button>
      </a>
    </div>
  </div>
  <div class="card mb-4 box-shadow">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">AV Club Support Tech</h4>
    </div>
    <div class="card-body">
      <br>
      <h5 class="card-title pricing-card-title">Login to Review Support Queue</h5>
      <br>
      <!-- <ul class="list-unstyled mt-3 mb-4">
        <li>10 users included</li>
        <li>2 GB of storage</li>
        <li>Email support</li>
        <li>Help center access</li>
      </ul> -->
      <a href="people/index.php?type=tech">
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Tech Login</button>
      </a>
    </div>
  </div>
</div>
    <!-- <p>
        Teachers can sign in here: <a href='people/index.php?type=teacher'>Make a request.</a>
    </p>
    <p>
        AV Club Support Tech sign in here: <a href='people/index.php?type=tech'>Support Queue</a>
    </p> -->
<?php include 'view/footer.php'?>
