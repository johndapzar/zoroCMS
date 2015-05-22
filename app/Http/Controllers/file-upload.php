<?php
 
 
move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$_FILES['file']['name']);
 
$array = array(
    'filelink' => 'upload/'.$_FILES['file']['name'],
    'filename' => $_FILES['file']['name']
);
 
echo stripslashes(json_encode($array));
?>