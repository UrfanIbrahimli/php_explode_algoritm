<?php
/**
 * Created by PhpStorm.
 * User: Urfan
 * Date: 10/26/2018
 * Time: 11:18 PM
 */
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

$str = "bu gun hava soyuqdur";
echo "<h1>Explode funksyasi</h1>";
print_r(explode(" ",$str));
echo "<hr>";
echo "<h1>Men yazdigim funksya</h1>";
print_r(CustomExplode(" ",$str));