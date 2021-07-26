
<?php

    function getFiles($path)
    {
        $files = scandir($path);
        $res = [];
  
         foreach ($files as $file) {
            if ($file !='.' && $file !='..') {
                $res[] = $file;
            }
          
        }
    
        return $res;
    
    }


  