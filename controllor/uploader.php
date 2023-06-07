<?php
include('../config/config.php');

if (isset($_REQUEST['submit']) == 'submit')
{
    $fileToUpload = $_REQUEST['fileToUpload'];
    $sql = "INSERT INTO upload_page(fileToUpload) VALUES('$fileToUpload')";
    $target_path = "$sql";
    $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
  
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully!";  
    } else{  
        echo "Sorry, file not uploaded, please try again!";  
    } 
}