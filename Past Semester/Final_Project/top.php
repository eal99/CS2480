<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>STAT143 Study Guide</title>
    <meta name="author" content="Ethan LeVeille and Caroline Rooney">
    <meta name="description" content="Study Tips for Statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
    <link rel="stylesheet" media="(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
    <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
    <link rel="icon" href="Images/Music.jpg">
</head>

<?php
    print '<body id="' . $pathParts['filename'] . '">';
    print '<!-- #################    Body element  ################# -->';
    include 'connect-DB.php';
    include 'header.php';
    include 'nav.php';
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>