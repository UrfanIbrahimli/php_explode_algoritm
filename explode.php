<?php
function CustomExplode($val,$str)
{
    $data = [];
    $l = "";
    $count = 0;
    if(strlen($str) > 0 && strlen($val)!=null)
    {
        for($i = 0; $i < strlen($str); $i++)
        {
            if($str[$i] != $val)
                $l .= $str[$i];
            else
            {
                $data[$count] = $l;
                $count++;
                $l = "";
            }
        }
        $data[$count] = $l;
        return $data;
    }
    return false;
}

$str = "this is a function";
print_r(CustomExplode(" ",$str));
