<?php
include 'top.php';
include 'nav.php';
?>
<main>
    <h1>SQL</h1>
    <h2>Create table</h2>
    <pre>
    CREATE TABLE tblPlaylists (
        pmkPlaylistID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fldName varchar(10),
        fldGenre varchar(30),
        fldCountry varchar(50)
    )
    </pre>

    <h2>Insert Data</h2>
    <pre>
    INSERT INTO tblPlaylists (fldName, fldGenre, fldCountry) VALUES
    ('Adele', 'Pop', 'UK'),
    ('Sam Smith', 'Pop', 'UK'),
    ('alt-J', 'Indie-Rock', 'US'),
    ('Two Feet', 'Alternative', 'US')
    </pre>

    <h2>Select records</h2>
    <pre>
    SELECT fldName, fldGenre, fldCountry FROM tblPlaylists
    </pre>

    <h2>Create table for form</h2>
    <pre>
    CREATE TABLE tblMusicSurvey (
        pmkMusicSurveyId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fldFavoriteApp varchar(15),
        fldArtistFave text,
        fldFirstName varchar(40),
        fldLastName varchar(40),
        fldEmail varchar(50),
        fldStudent varchar(11),
        fldAdele tinyint(1),
        fldBillie tinyint(1),
        fldNeither tinyint(1)
    )
    </pre>

    <h2> Insert into table </h2>
    <pre>
    INSERT INTO tblMusicSurvey(
    fldFavoriteApp, fldArtistFave, fldFirstName,
    fldLastName, fldEmail, fldStudent, fldAdele,
    fldBillie, fldNeither)
    VALUES
    ('1', 'Olivia Rodrigo', 'Ethan', 'LeVeille', 'eleveil1@uvm.edu', '1', '1', '1', '0')
    </pre>
</main>
<?php
include 'footer.php';
?>
