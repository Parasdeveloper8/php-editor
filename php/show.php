<?php
include("./class/file.php");
if(isset($_POST["showFiles"])){
    File::showFiles();
}
?>