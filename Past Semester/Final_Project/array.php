<?php
include 'top.php';
include 'nav.php';

$fallFavesPlaylist = array(
    array(2021, 'alt-J', 'The Dream', 'Alternative', 'U&ME'),
    array(2013, 'Elliot Moss', 'Highspeeds', 'Indie Pop', 'Slip'),
    array(2019, 'K.Flay', 'Solutions', 'Alternative', 'Bad Vibes'),
    array(2021, 'Lil Nas X & Jack Harlow', 'INDUSTRY BABY -Single', 'Hip-Hop/Rap', 'INDUSTRY BABY'),
    array(2020, 'Princess Nokia', 'Everything Sucks', 'Hip-Hop/Rap', 'I Like Him')
);
?>
<main>
    <h1>My Current Faves</h1>
    <section class="artistPhoto">
        <h2>Fall Faves</h2>
        <figure class="rounded">
            <img class="rounded" alt="Albums" src="Images/albums.png">
        </figure>

    </section>

    <section class="Song">
        <h2>Here's Some Current Favorites</h2>
        <p>I know my taste might not align with yours, but why not branch out and try something new? Or don't. I don't care..
            These songs are from a playlist I made a while ago, but have been keeping somewhat up to date. Personally, I think that
            music can do so much for you. Whether you're busting out an assignment (maybe even one that's due in 2 hours), or trying to unwind
            after a horrible week. Music can help us in many ways.
            Here's a link to the playlist:
            <a href="https://music.apple.com/us/playlist/fall-faves/pl.u-WMMYPFdpVd6L" target="blank">Fall Faves by Ethan LeVeille, on Apple Music</a>
        </p>

        <p>As an aside, here's something I wrote about globalization: Globalization has definitely affected the nation-state system.
            The nation-state system is based on a lot of contradictory ideals to that of globalization. One of the core ideas of globalization
            is the interconnectedness and interdependence between different societies, where the nation-state system is about independence and nationalism.
            Another contradiction between the two is that the nation-state system has distinct political and geographical borders, while globalization blurs
            those borders and boundaries. In the Steger reading we saw in Unit 2, they made the point that the global web of political interdependencies
            has challenged the independence/sovereignty of nation-states  </p>
    </section>

    <section class="Bio">
        <h2>Last <?php print count($fallFavesPlaylist);?> playlist</h2>
        <table>
            <tr>
                <th>Year</th>
                <th>Artist</th>
                <th>Album Name</th>
                <th>Genre</th>
                <th>Song Name</th>
            </tr>
            <?php
            foreach($fallFavesPlaylist as $fallFave){
                print '<tr>';
                print '<td>' . $fallFave[0] . '</td>';
                print '<td>' . $fallFave[1] . '</td>';
                print '<td>' . $fallFave[2] . '</td>';
                print '<td>' . $fallFave[3] . '</td>';
                print '<td>' . $fallFave[4] . '</td>';
                print '</tr>' . PHP_EOL;
            }
            ?>
        </table>

    </section>
</main>
<?php
include 'footer.php';
?>

