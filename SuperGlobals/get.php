<?php
$varPage = $_GET['page'];

$varPrevious = $_GET['page'] - 1;
$varNext = $_GET['page'] + 1;

?> 
<p>
<a href="server.php?page=<?=$varPrevious;?>">Previous</a>
<a href="globals.php?page=<?=$varNext;?>">Next</a> 
</p>
