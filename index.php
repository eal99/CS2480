<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CS 2480 Database Design</title>
    <meta name="author" content="Ethan LeVeille">
    <meta name="description" content="Sitemap for CS2480">
    <style>
        /* basic CSS */
        body {
            margin: auto;
            padding: 3%;
            width: 90%;
            display: grid;
        }

        figure {
            border: thin solid darkslategray;
            border-radius: 3%;
            padding: 3%;
            text-align: center;
        }

        figcaption {
            color: #839e99;
            font-style: italic;
            text-align: center;
        }

        img {
            border-radius: 3%;
            max-width: 90%
        }

        /* Setting up a grid layout for the sitemap page */
        body>h1 {
            grid-column: 1/2;
            grid-row: 1;

        }

        body>h2 {
            grid-column: 1/2;
            grid-row: 2;

        }

        body>p {
            grid-column: 1/2;
            grid-row: 3;
        }

        figure {
            border: thin solid darkslategray;
            border-radius: 3%;
            padding: 3%;
            text-align: center;
            grid-column: 2 / 2;
            grid-row: 1 / span 3;
        }

        .header {
            grid-area: header;
            grid-column: 1 / 3;
            padding: .5%;
            margin: .5%;
        }

        .lab-layout {
            border-bottom: thin dashed navy;
            display: inline-grid;
            grid-template-columns: 25% 25% 50%;
            grid-template-areas: "header header header"
                "public-files supporting-files grader-notes";
            padding: .5%;
            margin: .5%;
            grid-column: 1 / span 2;
        }

        .public-files {
            grid-area: public-files;
            padding: .5%;
            margin: .5%;
        }

        .supporting-files {
            grid-area: supporting-files;
            padding: .5%;
            margin: .5%;
        }

        .grader-notes {
            grid-area: grader-notes;
            padding: .5%;
            margin: .5%;
        }
    </style>
</head>
    
    

    <body>
        <figure>
            <img alt="Florida" src="Images/fl.jpeg" width="100" height="100">
            <figcaption>Wishing I was here</figcaption>
        </figure>
        
        <h1>CS 2480 -<em>A</em></h1>
        <h2>Ethan LeVeille - Site map</h2>
        <p><a href="ADMIN/code-viewer.php">My Admin Folder</a> <a href="ADMIN/table-viewer.php?getDatabase=">Table Viewer</a></p>
<!--  ###########################################  -->

        <section class="lab-layout">
            <h2 class="header">Lab Six -  Final project check point 2.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="live-lab6/index.php">Home page</a></p>
                <p><a href="live-lab6/products-display.php">Database Viewer</a></p>
                <p><a href="live-lab6/erd.php">ERD</a></p>
                <p><a href="live-lab6/dd.php">Data Dictionary</a></p>
                <p><a href="live-lab6/rough-dd.php">Rough Data Dictionary</a></p>
                <p><a href="live-lab6/schema.php">Schema</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="https://github.com/cs-2480/Lab-6-Ethan-LeVeille-Jessica-Rosseau.git">Github Repository</a></p>
                <p><a href="live-lab6/css/custom.css">css style sheet</a></p>
                <p><a href="live-lab6/css/custom-tablet.css">tablet style sheet</a></p>
                <p><a href="live-lab6/css/custom-phone.css">phone style sheet</a></p>
                <h3>Includes</h3>
                <p><a href="live-lab6/top.php">top.php</a></p>
                <p><a href="live-lab6/header.php">header.php</a></p>
                <p><a href="live-lab6/nav.php">nav.php</a></p>
                <p><a href="live-lab6/footer.php">footer.php</a></p>
                <p><a href="live-lab6/rough-dd.php">rough-dd.php</a></p>
                <p><a href="live-lab6/formal_dd.php">formal_dd.php</a></p>
                <p><a href="live-lab6/schema.php">schema.php</a></p>

                <h3>Version control</h3>
                <p><a href="live-lab6/gitCommands.txt">git commands</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
    <!--  ###########################################  -->
<!--  ###########################################  -->

        <section class="lab-layout">
            <h2 class="header">Lab Five -  Final project check point 1.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="live-lab5/index.php">Home page</a></p>
                <p><a href="live-lab5/erd.php">ERD</a></p>
                <p><a href="live-lab5/dd.php">Data Dictionary</a></p>
                <p><a href="live-lab5/rough-dd.php">Rough Data Dictionary</a></p>
                <p><a href="live-lab5/schema.php">Schema</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="https://github.com/cs-2480/Lab-5-Ethan-LeVeille-Jessica-Rosseau.git">Github Repository</a></p>
                <p><a href="live-lab5/css/custom.css">css style sheet</a></p>
                <p><a href="live-lab5/css/custom-tablet.css">tablet style sheet</a></p>
                <p><a href="live-lab5/css/custom-phone.css">phone style sheet</a></p>
                <h3>Includes</h3>
                <p><a href="live-lab5/top.php">top.php</a></p>
                <p><a href="live-lab5/header.php">header.php</a></p>
                <p><a href="live-lab5/nav.php">nav.php</a></p>
                <p><a href="live-lab5/footer.php">footer.php</a></p>
                <p><a href="live-lab5/rough-dd.php">rough-dd.php</a></p>
                <p><a href="live-lab5/formal_dd.php">formal_dd.php</a></p>
                <p><a href="live-lab5/schema.php">schema.php</a></p>

                <h3>Version control</h3>
                <p><a href="live-lab5/gitCommands.txt">git commands</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
    <!--  ###########################################  -->

<!--  ###########################################  -->

        <section class="lab-layout">
            <h2 class="header">Lab Four - Database Schema.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="live-lab4/index.php">Home page</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="https://github.com/cs-2480/Lab-4-Ethan-LeVeille.git">Github Repository</a></p>
                <p><a href="live-lab4/css/custom.css">css style sheet</a></p>
                <p><a href="live-lab4/css/custom-tablet.css">tablet style sheet</a></p>
                <p><a href="live-lab4/css/custom-phone.css">phone style sheet</a></p>
                <h3>Includes</h3>
                <p><a href="live-lab4/top.php">top.php</a></p>
                <p><a href="live-lab4/header.php">header.php</a></p>
                <p><a href="live-lab4/nav.php">nav.php</a></p>
                <p><a href="live-lab4/footer.php">footer.php</a></p>
                <p><a href="live-lab4/dd.php">dd.php</a></p>
                <h3>Version control</h3>
                <p><a href="live-lab4/gitCommands.txt">git commands</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
    <!--  ###########################################  -->

    <!--  ###########################################  -->

     <section class="lab-layout">
         <h2 class="header">Lab Three - Creating an ERD.</h2>
         <section class="public-files">
             <h3>Public Files</h3>
             <p><a href="live-lab3/index.php">Home page</a></p>
         </section>

         <section class="supporting-files">
             <h3>Supporting files</h3>
             <p><a href="live-lab3/css/custom.css">css style sheet</a></p>
             <p><a href="live-lab3/css/custom-tablet.css">tablet style sheet</a></p>
             <p><a href="live-lab3/css/custom-phone.css">phone style sheet</a></p>
             <h3>Includes</h3>
             <p><a href="live-lab3/top.php">top.php</a></p>
             <p><a href="live-lab3/header.php">header.php</a></p>
             <p><a href="live-lab3/nav.php">nav.php</a></p>
             <p><a href="live-lab3/footer.php">footer.php</a></p>
             <h3>Version control</h3>
             <p><a href="https://github.com/cs-2480/Lab-3-Ethan-LeVeille.git">git commands</a></p>
         </section>

         <section class="grader-notes">
             <h3>Notes to grader</h3>
             <p></p>
         </section>
     </section>

   <!--     ###########################################  -->

   <!--  ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Two - Version Control Software.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="live-lab2/index.php">Home page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="live-lab2/css/custom.css">css style sheet</a></p>
            <p><a href="live-lab2/css/custom-tablet.css">tablet style sheet</a></p>
            <p><a href="live-lab2/css/custom-phone.css">phone style sheet</a></p>
            <h3>Includes</h3>
            <p><a href="live-lab2/top.php">top.php</a></p>
            <p><a href="live-lab2/header.php">header.php</a></p>
            <p><a href="live-lab2/nav.php">nav.php</a></p>
            <p><a href="live-lab2/footer.php">footer.php</a></p>
            <h3>Version control</h3>
            <p><a href="https://github.com/cs-2480/Lab-2-Ethan-LeVeille.git">git commands</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab one - Unix commands.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="sitemap.php">Site map</a></p>
            <p><a href="live-lab1/">Sample Page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p></p>
            <h3>Version control</h3>
            <p><a href="https://github.com/cs-2480/Lab-1-Ethan-LeVeille.git">GitHub Repo</a></p>
            <p><a href="dev-lab2/git-Commands.txt">git commands</a></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->
</body>

</html>

