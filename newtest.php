<?php
echo "new file";
class human {
    function __construct($arr)
    {
        foreach ($arr as $key => $val){
            if ($val%$key == 0){
                echo true . "<br>";
            }else {
                echo false . "<br>";
            }
        }
    }
};
$abood = new human([5,4,7,8,9,2,1,0,5,2,8,8,9,4,,9,78,9,465,56,])

?>