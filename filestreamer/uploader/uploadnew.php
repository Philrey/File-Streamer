<?php

    if(isset($_POST['submit_image'])) {

		$new_image = $_FILES['new_image']['name'];
		$new_image_temp = $_FILES['new_image']['tmp_name'];
		
		if (is_uploaded_file($new_image_temp)) {
		   echo "File uploaded successfully.\n";
		   echo "Displaying contents\n";
		   readfile($new_image_temp);
		} else {
		   echo "Possible file upload attack: ";
		   echo "filename";
		}
		move_uploaded_file($new_image_temp, "../images/$new_image");
		

    }

?>

<form action="" method="post" enctype="multipart/form-data">

    <label for="new_image">Image: </label>
    <input type="file" name="new_image">
    <input type="submit" name="submit_image" value="Submit">

</form>