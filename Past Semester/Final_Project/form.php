<?php
include 'top.php';

$favoriteMusicApp = array('Apple Music', 'Spotify', 'SoundCloud', 'Pandora', 'YouTube');

$dataValid = false;
$favoriteApp = 'Apple Music';
$artistFave = '';
$firstName = '';
$lastName = '';
$email = '';
$student = 'Yep!';
$adele = false;
$billie = false;
$neither = false;

function getData($field) {
    if (!isset($_POST[$field])) {
        $data = "";
    } else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}

function verifyAlphaNum($testString) {

   return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}
?>

<main>
    <h1>Music Survey</h1>
    <section class="form-info">
        <figure class="rounded">
            <img class="rounded" alt="sunrise" src="Images/sunrise.jpeg">
            <figcaption><cite>Photo by Ethan LeVeille</cite></figcaption>
        </figure>
        <h2>Music</h2>
        <p>I'd love to know more about your favorite music.</p>
    <?php
    if($_SERVER["REQUEST_METHOD"] == 'POST') {

        $favoriteApp = getData('lstStreamingApp');
        $artistFave = getData('txtArtist');
        $firstName = getData('txtFirstName');
        $lastName = getData('txtLastName');
        $email = getData('txtEmail');
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $student = getData('radStudent');
        $adele = (int) getData('chkAdele');
        $billie = (int) getData('chkBillie');
        $neither = (int) getData('chkNeither');
        }

        $dataValid = true;

        if($favoriteApp == ''){
            print '<p class="mistake">Please choose your preferred app.</p>';
            $dataValid = false;
        } elseif(!in_array($favoriteApp, $favoriteMusicApp)){
            print '<p class="mistake">Please choose your preffered app.</p>';
            $dataValid = false;
        }

        if($artistFave == ''){
        print '<p class="mistake">Please enter your favorite artist.</p>';
        $dataValid = false;
        } elseif(!verifyAlphaNum($artistFave)){
        print '<p class="mistake">Your answer can not be accepted due to invalid characters.</p>';
        $dataValid = false;
        }

        if($firstName == ''){
        print '<p class="mistake">Please enter your first name.</p>';
        $dataValid = false;
        } elseif(!verifyAlphaNum($firstName)){
        print '<p class="mistake">Your first name contains invalid characters, please just use letters.</p>';
        $dataValid = false;
        }

        if($lastName == ''){
        print '<p class="mistake">Please enter your last name.</p>';
        $dataValid = false;
        } elseif(!verifyAlphaNum($firstName)){
        print '<p class="mistake">Your last name contains invalid characters, please just use letters.</p>';
        $dataValid = false;
        }

        if($email == ''){
        print '<p class="mistake">Please enter your email address.</p>';
        $dataValid = false;
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        print '<p class="mistake">Your email address contains invalid characters.</p>';
        $dataValid = false;
        }

        if($student != "Yep!" AND $student != "Nope!" AND $student != "Grad Student") {
        print '<p class="mistake">Please answer this question.</p>';
        $dataValid = false;
        }

        $totalChecked = 0;

        if($adele != 1) $adele = 0;
        $totalChecked += $adele;

        if($billie != 1) $billie = 0;
        $totalChecked += $billie;

        if($neither != 1) $neither = 0;
        $totalChecked += $neither;


        if($totalChecked == 0){
        print '<p class="mistake">Please choose at least one checkbox.</p>';
        $dataValid = false;
        }

        if($dataValid){
            try{
                $sql = 'INSERT INTO tblMusicSurvey  (fldFavoriteApp, fldArtistFave, fldFirstName, fldLastName, fldEmail, fldStudent, fldAdele, fldBillie, fldNeither) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
                $statement = $pdo->prepare($sql);
                $data = array($favoriteApp, $artistFave, $firstName, $lastName, $email, $student, $adele, $billie, $neither);

                if($statement->execute($data)){
                print '<h2>Thank you so much!</h2>';
                print '<p>Information was successfully saved.</p>';
                } else {
                print '<p>Record was NOT saved. ERROR. </p>';
                }

                } catch(PDOException $e){
                print '<p>Could not insert the record, please contact the administrator.</p>';
                }

        }

        ?>
    </section>

    <section  class="form-it-self">
            <h2>Thanks for taking the time!</h2>

        <form action="#" id ="frmMusic" method="post">
            <fieldset class="listbox">
                <legend>What Streaming app do you use?</legend>
                <p>
                    <select id="lstStreamingApp" name="lstStreamingApp" tabindex="120">
                        <option value="Apple Music" <?php
                        if($favoriteApp == "Apple Music") print 'selected';
                        ?>>Apple Music</option>


                        <option value="Spotify" <?php
                        if($favoriteApp == "Spotify") print 'selected';
                        ?>>>Spotify</option>

                        <option value="SoundCloud" <?php
                        if($favoriteApp == "SoundCloud") print 'selected';
                        ?>>>SoundCloud</option>

                        <option value="Pandora" <?php
                        if($favoriteApp == "Pandora") print 'selected';
                        ?>>>Pandora</option>

                        <option value="YouTube" <?php
                        if($favoriteApp == "YouTube") print 'selected';
                        ?>>>YouTube</option>
                    </select>
                </p>
            </fieldset>

            <!--Text area for favorite musical artist-->
            <fieldset class="textarea">
                <p>
                    <label for="txtArtist">Let me know what your favorite artist is:</label>
                    <textarea id="txtArtist" name="txtArtist" tabindex="200"><?php print $artistFave; ?></textarea>
                </p>
            </fieldset>

            <!--Text boxes for contact information-->
            <fieldset class ="contact">
                <legend>Contact Information</legend>
                <p>
                    <label class="required" for="txtFirstName">First Name</label>
                    <input id="txtFirstName" maxlength="30" name="txtFirstName" onfocus="this.select()" tabindex="300" type="text" value="<?php print $firstName ; ?>" required>
                </p>

                <p>
                    <label class = "required" for = "txtLastName">Last Name</label>
                    <input id = "txtLastName" maxlength = "30" name = "txtLastName" onfocus="this.select()" tabindex = "305" type = "text" value ="<?php print $lastName ; ?>" required>
                </p>

                <p>
                    <label class = "required" for = "txtEmail">Email Address</label>
                    <input id = "txtEmail" maxlength = "30" name = "txtEmail" onfocus="this.select()" tabindex = "310" type = "text" value ="<?php print $email ; ?>" required>
                </p>
            </fieldset>

            <!--Multiple Choice-->
            <fieldset class="radio">
                <legend>Are you a UVM undergrad?</legend>
                <p>
                    <input type="radio" id="radStudentUndergrad" name="radStudent" value="Undergrad" tabindex="410" required <?php
                    if($student == "Yep!") print 'checked'; ?>>
                    <label class="radio-field" for = "radStudentUndergrad">Yep!</label>
                </p>

                <p>
                    <input type="radio" id="radStudentNotStudent" name="radStudent" value="Not a student" tabindex="430" required <?php
                    if($student == "Nope!") print 'checked'; ?>>>
                    <label class="radio-field" for = "radStudentNotStudent">Nope!</label>
                </p>

                <p>
                    <input type="radio" id="radGradStudent" name="radStudent" value="Grad Student" tabindex="440" required <?php
                    if($student == "Grad Student") print 'checked'; ?>>>
                    <label class="radio-field" for = "radGradStudent">Grad Student</label>
                </p>
            </fieldset>

            <!--Checkboxes-->
            <fieldset class="checkbox">
                <legend>Do you listen to either of these artists?</legend>

                <p>
                    <input id="chkAdele" name="chkAdele" tabindex="510" type="checkbox" value="1" <?php
                    if($adele) print 'checked'; ?>>>
                    <label for="chkAdele">Adele</label>
                </p>

                <p>
                    <input id="chkBillie" name="chkBillie" tabindex="520" type="checkbox" value="1" <?php
                    if($billie) print 'checked'; ?>>>
                    <label for="chkBillie">Billie Eilish</label>
                </p>

                <p>
                    <input id="chkNeither" name="chkNeither" tabindex="530" type="checkbox" value="1" <?php
                    if($neither) print 'checked'; ?>>>
                    <label for="chkNeither">Neither!</label>
                </p>
            </fieldset>

            <fieldset class="buttons">
                <input id="btnSubmit" name="btnSubmit" tabindex="900" type="submit" value="Submit" >
            </fieldset>
        </form>
    </section>

    <section class="form-feedback">
        <h2>Thank you</h2>
        <?php
        print '<p>Post Array:</p><pre>';
        print_r($_POST);
        print '</pre>';
        ?>
    </section>
</main>
<?php
include 'footer.php';
?>
