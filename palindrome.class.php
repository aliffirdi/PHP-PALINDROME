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

    public function checkv3 ($value=null)
    {

        $arrNum = (int)((strlen($value))-1);

        for ($i=$arrNum; $i >= 0; $i--) {

            $firstIndex = $i;
            $lastIndex  = strlen($value) - $i - 1;

            if ($value[$firstIndex] != $value[$lastIndex]) {

                return false;

            }

        }

        return true;

    }

    public function checkv4 ($value=null)
    {

        $reverse = null;

        for ($i=strlen($value)-1; $i >= 0; $i--) {

            $reverse .= $value[$i];

        }
        
        if ($value != $reverse) {

            return false;

        }

        return true;

    }

    public function checkv5 ($value=null)
    {

        return $this->isPalindromeRecursiveMethod( $value, 0 );

    }

    private function isPalindromeRecursiveMethod ( $value = null, $i )
    {

        if ($i < strlen($value) / 2) {

            $firstIndex = $i;
            $lastIndex  = strlen($value) - $i - 1;

            if ($value[$firstIndex] != $value[$lastIndex]) {

                return false;

            } else {

                return $this->isPalindromeRecursiveMethod( $value, $i + 1 );
                
            }

        } else {

            return true;

        }

    }

}
