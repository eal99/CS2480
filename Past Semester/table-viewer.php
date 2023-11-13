<?php
include 'credentials.php';

$debug = isset($_GET['x']) ? true : false;

$version = 'v2022-2-14';
/* please put your reader password in a file named credentials.php that you sftp to your the ADMIN folder
   which acknowledges that you give us reader permission on your database to remove access after the 
   class is over change your password to xxxx. Your credentials.php should look like this:

<?php
$password = 'your reader password';
?>


*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php print get_current_user() . ' - Database Information ' . $versionl ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
 
        /* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            border: 0;
            font-size: 100%;
        }

        /* HTML5 display-role reset for older browsers */
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1.5;
            margin: auto;
            width: 95%
        }

nav a{
  width: 40%;
  display: inline-block;
  font-size: x-large;
}
nav a:hover{
    background-color: #ddffdd;
}
        table {
            border-collapse: collapse;
        }
        
#admin table {
    margin: 0;
}

        table {
            border: medium #000080 solid;
            max-width: 100%;
        }

        td,
        th {
            border: thin #000080 dashed;
            text-align: left;
            padding: .2em;
        }
        caption{
            font-weight: bold;
            font-size: large;
        }

        tr{
            line-height: 1.5em;
        }
        .databases tr td{
            padding: 0;
        }

body#admin tr.current{
    font-size: 1.5em;
    font-weight: bolder;
    background-color: lightgoldenrodyellow;
    border: medium solid darkblue;
}

.current a{
        color: darkred;
}


/*    grid set up    */
        body {
            display: grid;
            grid-template-areas: "debug nav" "databases tables" "records tables";
            grid-template-columns: auto auto;
            grid-gap: 2em;
        }

        nav {
            grid-area: nav;
        }

        .databases {
            grid-area: databases;
        }

        .tables {
            grid-area: tables;
        }

        .records {
            grid-area: records;
        }

        @media only screen and (max-width: 750px) {
            body {
                grid-template-areas: "debug" "nav" "databases" "tables" "records";
                grid-template-columns: auto;
            }
        }
    
    </style>
    <link rel="stylesheet" href="//rerickso.w3.uvm.edu/Tools/css/admin.css?<?php print time(); ?>">
</head>

<?php

function runQuery($query = '', $values = '', $code = '')
{
    global $pdo;
    $statement = $pdo->prepare($query);

    if (is_array($values)) {
        $statement->execute($values);
    } else {
        $statement->execute();
    }
    $results = $statement->fetchAll();

    return $results;
}

print '<body id="admin" style="padding: 1em;">
        <nav>
            <p style="float: right;">' .  $version . '</p>
            <a href="index.php" target="_blank">Admin Page</a>
            <a href="../" target="_blank">Site map</a>
            
        </nav>' . PHP_EOL;
//##############################################################################
//
// This page lists your tables and fields within your database. if you click on
// a database name it will show you all the records for that table. 
// 
// 
// This file is only for class purposes and should never be publicly live
//##############################################################################
if ($password == '') {
    print "<p>Your credentials.php is not set up so this page will not work. Please contact your instructor.</p>";
    die();
}

$databaseName = '';

$currentUser = get_current_user();

$databaseName = isset($_GET['getDatabase']) ? htmlentities($_GET['getDatabase'], ENT_QUOTES, "UTF-8") : strtoupper($currentUser);

$dsn = 'mysql:host=webdb.uvm.edu;';
if(strpos($databaseName, '_')) $dsn .= 'dbname=' . $databaseName;

$username = $currentUser . '_reader';
$pdo = null;

if ($debug) {
    print '<section class="debug"><p>Try connecting with phpMyAdmin with these credentials.</p>';
    print '<p>Username: ' . $username;
    print '<p>DSN: ' . $dsn;
    print '<p>Password: ' . $password;
    print '</section>';
}

try {
    $pdo = new PDO($dsn, $username, $password);

    if (!$pdo) {
        if ($debug) echo '<section class="debug"><p>You are NOT connected to the database!</p></section>';
    } else {
        if ($debug) echo '<section class="debug"><p>You are connected to the database!</p></section>';
    }
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    if ($debug) print '<section class="debug"><p>An error occurred while connecting to the database: $error_message </p></section>'. PHP_EOL;
}
// print out a list of all the tables and their description
// make each table name a link to display the record
print '<table class="databases">' . PHP_EOL;
print '<caption>Databases</caption>';
$query = 'SHOW DATABASES';
$results = runQuery($query);

// loop through all the tables in the database, display fields and properties
if (is_array($results)) {
    foreach ($results as $row) {
        if (substr($row[0], -7) != '_schema') {
            // table name link
            print '<tr';
            print $databaseName == $row[0] ? ' class="current"' : '';
            print '>';
            print '<th>';
            print '<a href="?getDatabase=' . htmlentities($row[0], ENT_QUOTES) . '">';
            print htmlentities($row[0], ENT_QUOTES) . '</a>';
            print '</th>';
            print '</tr>';
        }
    }
}
print '</table>' . PHP_EOL;

if (str_contains($databaseName, '_')) {
    $tables = '';
    $tableName = '';

    if ($databaseName != strtoupper(get_current_user())) {
        if (isset($_GET['getRecordsFor'])) {
            $tableName = htmlentities($_GET['getRecordsFor'], ENT_QUOTES, "UTF-8");
        }

        // print out a list of all the tables and their description
        // make each table name a link to display the record

        print '<table class="tables">' . PHP_EOL;
        print '<caption>Table Structure</caption>';
        $query = 'SHOW TABLES';
        $tables = runQuery($query);

        // loop through all the tables in the database, display fields and properties
        if (is_array($tables)) {
            foreach ($tables as $table) {

                //get the fields and any information about them
                $query = 'SHOW COLUMNS FROM ' . $table[0];
                $columns = '';
                $columns = runQuery($query);

                $span = count($columns);

                // table name link
            print '<tr';
            print $tableName == $table[0] ? ' class="current"' : '';
            print '>';
                print '<th colspan="' . $span . '">';
                print '<a href="?getDatabase=' . $databaseName . '&getRecordsFor=' . htmlentities($table[0], ENT_QUOTES) . '">';
                print htmlentities($table[0], ENT_QUOTES) . '</a>';
                print '</th>';
                print '</tr>';

                foreach ($columns as $field) {
                    print '<tr>';
                    print '<td>' . $field['Field'] . '</td>';
                    print '<td>' . $field['Type'] . '</td>';
                    print '<td>' . $field['Null'] . '</td>';
                    print '<td>' . $field['Key'] . '</td>';
                    print '<td>' . $field['Default'] . '</td>';
                    print '<td>' . $field['Extra'] . '</td>';
                    print '</tr>';
                }
            }
        }
        print '</table>' . PHP_EOL;
    }

    // Display all the records for a given table
    if ($tableName != "") {
        //get the fields and any information about them
        $query = 'SHOW COLUMNS FROM ' . $tableName;
        $fields = '';
        $fields = runQuery($query);

        $fieldCount = count($fields);
        //print out the table name and how many records there are
        print '<table class="records">' . PHP_EOL;
        print '<caption>Data Records</caption>';
        $query = 'SELECT * FROM ' . $tableName;
        $allRecords = '';
        $allRecords = runQuery($query);

        print '<tr>';
        print '<th colspan=' . $fieldCount . '>' . $query;
        print '</th>';
        print '</tr>';

        print '<tr>';
        print '<th colspan=' . $fieldCount . '>' . $tableName;
        print ' ' . count($allRecords) . ' records';
        print '</th>';
        print '</tr>';

        // print out the column headings, note i always use a 3 letter prefix
        // and camel case like pmkCustomerId and fldFirstName
        print '<tr>';

        // loop through all the tables in the database, display fields and properties
        if (is_array($fields)) {
            foreach ($fields as $field) {
                print '<td>';
                $camelCase = preg_split('/(?=[A-Z])/', substr($field[0], 3));

                foreach ($camelCase as $one) {
                    print $one . " ";
                }
                print '</td>';
            }
        }
        print '</tr>';

        foreach ($allRecords as $rec) {
            print '<tr>';
            for ($i = 0; $i < $fieldCount; $i++) {
                print '<td>' . $rec[$i] . '</td>';
            }
            print '</tr>';
        }

        // all done
        print '</table>' . PHP_EOL;
    }
}
?>
</body>
</html>
