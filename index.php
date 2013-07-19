<?php include('./includes/header.php');?>
  <div id="topbar">
    <a href="#">Login</a>
  </div>
  <div id="overlay">
    <form method="post" action="login.php">
      <ul>
      <li><label>Username</label></li>
      <input type="text" name="username">
      <li><label>Password</label></li>
      <input type="password" name="password">
      <br><br>
      <li><input type="submit" value="submit"></li><ul>
    </form>
  </div>
  <div id="googleMap"></div>
<?php include('./includes/footer.php'); ?>