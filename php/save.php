<?php
include("./class/score.php");
if(isset($_POST['sub'])){
    //remarks
    $remark = $_POST['remark'];

    //test name
    $testName = $_POST['test-name'];
    
    //secured marks 
    $maths = $_POST['maths'];
    $english = $_POST['english'];
    $science = $_POST['science'];
    $geography = $_POST['geography'];
    $hindi = $_POST['hindi'];
    $sanskrit = $_POST['sanskrit'];
    $economics = $_POST['economics'];
    $history = $_POST['history'];
    $politics = $_POST['politics'];

    //total marks
    $mathsT = $_POST['mathsT'];
    $englishT = $_POST['englishT'];
    $scienceT = $_POST['scienceT'];
    $geographyT = $_POST['geographyT'];
    $hindiT = $_POST['hindiT']; 
    $sanskritT = $_POST['sanskritT'];
    $economicsT = $_POST['economicsT'];
    $historyT = $_POST['historyT'];
    $politicsT = $_POST['politicsT'];

    //combined array for total and secured marks
    $marks = [
        "maths"=> [
            "subject"=> "maths",
            "total" => $mathsT,
            "secured" => $maths
        ],
        "science"=> [
            "subject"=> "science",
            "total" => $scienceT,
            "secured" => $science
        ],"hindi"=> [
            "subject"=> "hindi" ,
            "total" => $hindiT,
            "secured" => $hindi
        ],"english"=> [
            "subject"=> "english",
            "total" => $englishT,
            "secured" => $english
        ],"sanskrit"=> [
            "subject"=> "sanskrit",
            "total" => $sanskritT,
            "secured" => $sanskrit
        ],"geography"=> [
            "subject"=> "geography",
            "total" => $geographyT,
            "secured" => $geography
        ],"politics"=> [
            "subject"=> "politics",
            "total" => $politicsT,
            "secured" => $politics
        ],"economics"=> [
            "subject"=> "economics",
            "total" => $economicsT,
            "secured" => $economics
        ],"history"=> [
            "subject"=> "history",
            "total" => $historyT,
            "secured" => $history
        ]
        ];
    //calling save_marks static method
    ScoreData::save_marks($testName,$remark,$marks);
}
?>