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
         foreach($items as $itm):
           echo "<a href=$path . $itm >$itm</a>";
           echo "<br/>";
          endforeach;
     }
    }
?>