<?php
include("./class/score.php");
if(isset($_GET['show'])){
    ScoreData::show_Data();
}

?>