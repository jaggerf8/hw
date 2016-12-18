<html>
<body>

<?php
$file = $_FILES['image']['name'];
move_uploaded_file($_FILES ['image']['tmp_name'],"uploads/".$file);
?>

<form action="" method="post" enctype="multipart/form-data">
<input type = "file" name = "upload" /> <br/>
<input type = "submit" value = "submit"  name = "btn" />
</form>
</body>
</html>  
