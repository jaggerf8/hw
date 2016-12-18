<?php
if (isset($_POST['submit'])) {
$example = $_POST['example'];

echo $example;
}
?>

<form action="" method="post">

Example value 1: <input name="example" type="text" /> 

<input name="submit" type="submit" />
</form>
