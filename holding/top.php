<?php
define('PHP_SELF', $_SERVER['PHP_SELF']);
define('PATH_PARTS', pathinfo(PHP_SELF));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SEE: https://moz.com/learn/seo/title-tag</title>
    <meta name="author" content="Ethan LeVeille">
    <meta name="description" content="https://moz.com/learn/seo/meta-description">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">

    <link rel="stylesheet" type="text/css"
        href="css/custom.css?version=<?php print time(); ?>">
    <link rel="stylesheet" type="text/css" media=" (max-width: 800px)"
         href="css/custom-tablet.css?version=<?php print time(); ?>">
    <link rel="stylesheet" type="text/css" media=" (max-width: 600px)"
         href="css/custom-phone.css?version=<?php print time(); ?>">
</head>

<?php
print '<body>' . PHP_EOL;
include 'header.php';
print PHP_EOL;
include 'nav.php';
print PHP_EOL;
?>

