<?php
  // Include the necessary PHP files
  require_once('connect-DB.php');
  require_once('db.php');
  require_once('functions.php');

  // Start the session
  session_start();

  // Check if the user is logged in
  if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if the user is not logged in
    header('Location: login.php');
    exit();
  }

  // Retrieve the user's information from the database
  $user_id = $_SESSION['user_id'];
  $user = get_user($db, $user_id);

  // Display the header
  include('header.php');

  // Display the navigation
  include('nav.php');

  // Display the main content
?>
  <h1>Welcome <?php echo $user['name']; ?>!</h1>
  <p>This is the main content of the website.</p>
<?php

  // Display the footer
  include('footer.php');
?>

