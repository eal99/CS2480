<!-- Connecting -->
<?php
$databaseName = 'ELEVEIL1_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'eleveil1_writer';
$password = 'cXb2UZ3m6aHK';
$pdo = new PDO($dsn, $username, $password);
?>
<!-- Connection complete -->