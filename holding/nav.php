<nav>
    <ul>
        <li><a class="<?php if (PATH_PARTS['filename'] == "index") { print 'activePage'; } ?>" href="index.php">Home</a></li>
        <li><a class="<?php if (PATH_PARTS['filename'] == "dd") { print 'activePage'; } ?>" href="dd.php">Data Dictionary</a></li>
        <!-- Add a new list item for ERD.php -->
        <li><a class="<?php if (PATH_PARTS['filename'] == "rough-dd") { print 'activePage'; } ?>" href="rough-dd.php">Rough Data Dictionary (DD)</a></li>
	<li><a class="<?php if (PATH_PARTS['filename'] == "erd") { print 'activePage'; } ?>" href="erd.php">Entity Relationship Diagram (ERD)</a></li>
	<li><a class="<?php if (PATH_PARTS['filename'] == "schema") { print 'activePage'; } ?>" href="schema.php">Schema</a></li>
    </ul>
</nav>

