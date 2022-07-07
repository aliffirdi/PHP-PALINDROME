<?php
namespace Github\aliffirdi;

class palindrome
{
    
    public function checkv1 ($value=null)
    {

        if ($value != strrev($value)) {

            return false;

        }

        return true;

    }

    public function checkv2 ($value=null)
    {

        $arrNum = (int)((strlen($value)/2)-1);

        for ($i=$arrNum; $i >= 0; $i--) {

            $firstIndex = $i;
            $lastIndex  = strlen($value) - $i - 1;

            if ($value[$firstIndex] != $value[$lastIndex]) {
                return false;
            }

        }

        return true;

    }

}
