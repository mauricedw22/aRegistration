<!DOCTYPE HTML>
<html lang="en">
<head>
<title> Image Upload PHP Script </title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
<meta name="description" content="Image Upload Script with HTML5 and PHP!" />

<style>


</style>

</head>

<body>

<h2> Image Uploader! </h2>

<form enctype="multipart/form-data" action="" method="POST">

<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
Choose a file to upload: <input type="file" name="uploadedFile" /><br />
<input type="submit" name="submit" value="Upload File" /><br />

</form>

<?php

if(isset($_POST['submit'])){

  $target_dir = "uploads/";
  
  $target_path = $target_dir . basename($_FILES['uploadedFile']['name']);
  
  $imageFileType = pathinfo($target_path,PATHINFO_EXTENSION);
  
  if(file_exists($target_path)){
    
	echo "Sorry, file already exists. <br /> Try renaming file.";
  
  }

  if($_FILES['uploadedFile']['size']>500000){
  
    echo "Sorry, your file is too big.";
  
  }
  
  if($imageFileType != 'jpg' && $imageFileType != 'jpeg' && $imageFileType != 'gif' && $imageFileType != 'png'){
  
    echo "Sorry, only jpg, jpeg, gif, and png file types allowed.";
  
  }
  
  if(move_uploaded_file($_FILES['uploadedFile']['tmp_name'],$target_path)){
  
    echo "The file ".basename($_FILES['uploadedFile']['name'])." has been uploaded.";
  
  }else{
  
    echo "Sorry, there was an error uploading your file.";
   
  }

}

?>






</body>

</html>