<?php require 'templates/header.php';  ?>
<h2>Register</h2>
<form action="register.php" method="POST">
  <div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>
  </div>
  <div>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
  </div>
  <div>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
  </div>
  <div>
    <button type="submit">Register</button>
  </div>
</form>
<?php require 'templates/footer.php' ?>