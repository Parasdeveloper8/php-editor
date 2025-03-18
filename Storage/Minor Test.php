<?php
$test_name = "Minor Test";
$remarks = "Remember spelling,always try to make question shorter";
$marks = json_decode('{
    "maths": {
        "subject": "maths",
        "total": "20",
        "secured": "18"
    },
    "science": {
        "subject": "science",
        "total": "",
        "secured": ""
    },
    "hindi": {
        "subject": "hindi",
        "total": "",
        "secured": ""
    },
    "english": {
        "subject": "english",
        "total": "20",
        "secured": "18"
    },
    "sanskrit": {
        "subject": "sanskrit",
        "total": "",
        "secured": ""
    },
    "geography": {
        "subject": "geography",
        "total": "",
        "secured": ""
    },
    "politics": {
        "subject": "politics",
        "total": "",
        "secured": ""
    },
    "economics": {
        "subject": "economics",
        "total": "",
        "secured": ""
    },
    "history": {
        "subject": "history",
        "total": "",
        "secured": ""
    }
}', true);

echo "<h1>$test_name</h1>";
echo "<fieldset>";
foreach ($marks as $m) {
    foreach ($m as $key => $value) {
    echo "<fieldset>";
        echo "<b>$key</b> : $value";
        echo "<br/>";
     echo "</fieldset>";
    }
}
echo "</fieldset>";
echo "<h2>Your Remarks</h2>";
echo $remarks;
?>