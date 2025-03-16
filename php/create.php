<?php
include("./class/file.php");
if(isset($_POST['sub'])){
    //file content
    $content = $_POST['content'];

    //file name
    $fileName = $_POST['file-name'];
    
    //calling create save file static method
    File::createSaveFile($fileName,$content);
}
?>