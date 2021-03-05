<?php
    function getNumMatches($arr,$word)
    {
        $num=0;
        foreach ($arr as $str) {
            if ($str==$word) {
                $num++;
            }
        }
        return $num;
    }
    /*$arr=['walid','asd','ahmed','walid','asdqwe','qwewq','walid'];
    $numMatches=getNumMatches($arr,"walid");
    echo $numMatches."<hr>";*/
    //--------------------------------------------------
    function getPriceWithDiscount($price)
    {
        if($price<1000) {
            return ($price*0.90);
        }
        else {
            return ($price*0.95);
        }
    }
    //echo "original price is 500 and it's:".getPriceWithDiscount(500)." after discount";
    //echo "original price is 1500 and it's:".getPriceWithDiscount(1500)." after discount";
?>