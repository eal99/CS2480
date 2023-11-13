<?php
include 'top.php';



$host = 'webdb.uvm.edu';  // Replace with your host
$db   = 'ELEVEIL1_cs2480_lab_4';  // Replace with your database name
$user = 'eleveil1_reader';  // Replace with your database user
$pass = 'nIxX7OvKu0IJ';  // Replace with your database password


// Creating connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name FROM Quiz";
$result = $conn->query($sql);
?>

<main>
    <h2>Available Quizzes</h2>
    <ul>
    <?php
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["Name"] . "</li>";
    }
    ?>
    </ul>
</main>

<?php
$conn->close();
include 'footer.php';
?>

