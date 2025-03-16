<?php
$home = "../index.html";
echo "<a href=$home>Home</a>";
include("./class/file.php");
if(isset($_POST["showFiles"])){
    File::showFiles();
}
?>