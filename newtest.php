<?php
echo "new file";
class human {
    function __construct($arr)
    {
        foreach ($arr as $key => $val){
            if ($key%$val == 0){
                echo true . "<br>";
            }else {
                echo false . "<br>";
            }
        }
    }
};

?>