<?php
    $str = "aaaqwesds5497asd1233adfgd23fgbf345ghhkjk435df";
    function Cust($str)
    {
        $len = strlen($str);
        $arr = [];
        for($i=0;$i<$len;$i++)
        {
            if(isset($arr[$str[$i]]))
            {
                $arr[$str[$i]]++;
            }
            else
            {
                $arr[$str[$i]]=1;
            }
            if($arr[$str[$i]]>=3)
            {
                return $str[$i];
            }
        }
        return $res;
    }
    print_r(Cust($str));
?>