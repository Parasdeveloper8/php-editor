<?php
//class for file related work
class File{
    //name of file in html page
    //content of file
    static function createSaveFile($name,$content){
            $dir = dirname(__DIR__, 2) . "/Storage/"; // Go up 2 levels to reach root
            $fileName = $dir . $name;
            $content = $content;
            $file = fopen($fileName,"w") or die("unable to create file"); //w = write
            fwrite($file,$content);
            fclose($file);
            echo "file created";
            }

    //function to show files
    static function showFiles(){
        //$path = dirname(__DIR__, 2) . "/Storage/";
        $path = "../Storage/";
        $items = scandir($path);
        //print_r($items);
        //To remove . and .. from array
        $items = array_diff($items,array(".",".."));
          //print_r($items);
          echo "<fieldset>";
          echo "<legend>Files</legend>";
          echo "<ol>";
         foreach($items as $itm):
          //path to directly go to file
           $path = "../Storage/$itm";
           echo "<li><a href=$path>$itm</a></li>";
           echo "<br/>";
          endforeach;
          echo "</ol>";
          echo "</fieldset>";
     }
    }
?>