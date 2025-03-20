<?php
//class for marks related work
class ScoreData{
    //function to save marks data
    static function save_marks($test_name , $remarks , $marks){
         // Convert array to JSON string
         $marksJson = json_encode($marks, JSON_PRETTY_PRINT);
        //let's loop over $marks array and send organised data
        //heredoc syntax
        //sending executable code in file
        $text =  <<<PHP
        <?php
        \$test_name = "$test_name";
        \$remarks = "$remarks";
        \$marks = json_decode('$marksJson', true);

        echo "<h1>\$test_name</h1>";
        echo "<fieldset>";
        foreach (\$marks as \$m) {
            foreach (\$m as \$key => \$value) {
            echo "<fieldset>";
                echo "<b>\$key</b> : \$value";
                echo "<br/>";
             echo "</fieldset>";
            }
        }
        echo "</fieldset>";
        echo "<h2>Your Remarks</h2>";
        echo \$remarks;
        ?>
        PHP;
        $text = (string) $text;
        $fileName = "../Storage/" . $test_name . '.php';
        $content = $text;
        $file = fopen($fileName,"w") or die("unable to create file"); //w = write
        fwrite($file,$content);
        fclose($file);
        echo "<a href=../index.html>Home</a><br/>";
        echo "file created";
    }

    //static function to show data
    static function show_Data(){
        $path = "../Storage/";
        $items = scandir($path);
        //To remove . and .. from array
        $items = array_diff($items,array(".",".."));
        //print_r($items);
         foreach($items as $itm):
         echo("      
         <fieldset><a href=../Storage/$itm style=text-decoration:none;>$itm</a>
         <br/>
         <br/>
         <form method=post>
         <button type=submit name=$itm >Delete $itm</button>
         </form>
         </fieldset>
         ");
         echo "<br/>";
         endforeach;
    }

    //static function to delete data
    static function delete_Data(){

    }
}
?>