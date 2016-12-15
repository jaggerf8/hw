<?php

echo '<table>';
$file = fopen("file1.csv","r");
echo '<table border = "1">';

while(($line = fgetcsv($file)) != false)
{
	echo '<tr>';
	foreach($line as $grid)
	{
		echo '<td>' . htmlspecialchars($grid) . '</td>';
	}
	echo '</tr>';
}
fclose($file);
echo '</table>';

?>
