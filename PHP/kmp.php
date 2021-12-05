<?php

function escape_string($str) {
    /*
    * Returns a string with backslashes before characters that need to be escaped.
    * As required by MySQL and suitable for multi-byte character sets
    * Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and ctrl-Z.
    * Escapes following characters:-
    x00 = \0 (NUL) = 0
    x0A = \n = 10
    x0D = \r = 13
    x1A = ctl-Z = 
    x22 = "
    x27 = '
    x5C = \
    * To escape malicious LIKE query
    addcslashes($escaped, '%_');
    */
    
    $str = escape($str, chr(hexdec("5C")));
    $str = escape($str, chr(hexdec("0")));
    $str = escape($str, chr(hexdec("A")));
    $str = escape($str, chr(hexdec("D")));
    $str = escape($str, chr(hexdec("1A")));
    $str = escape($str, chr(hexdec("22")));
    $str = escape($str, chr(hexdec("27")));
    $str = addcslashes($str, '%_');

    return $str;
}

function escape($str, $pat) {
    $matches = SearchString($str, $pat);
    if (count($matches) > 0) {
        $i = 0;
        foreach ($matches as $value) {
            $str = substr_replace($str, chr(92), $value + $i, 0);
            $i = $i + 1;
        }
    }

    return $str;
}

function SearchString($str, $pat) {
    $retVal = array();
    $M = strlen($pat);
    $N = strlen($str);
    $i = 0;
    $j = 0;
    $lps = array();

    ComputeLPSArray($pat, $M, $lps);

    while ($i < $N) {
        if ($pat[$j] == $str[$i]) {
            $j++;
            $i++;
        }

        if ($j == $M) {
            array_push($retVal, $i - $j);
            $j = $lps[$j - 1];
        } else if ($i < $N && $pat[$j] != $str[$i]) {
            if ($j != 0)
                $j = $lps[$j - 1];
            else
                $i = $i + 1;
        }
    }

    return $retVal;
}

function ComputeLPSArray($pat, $m, &$lps) {
    $len = 0;
    $i = 1;

    $lps[0] = 0;

    while ($i < $m) {
        if ($pat[$i] == $pat[$len]) {
            $len++;
            $lps[$i] = $len;
            $i++;
        } else {
            if ($len != 0) {
                $len = $lps[$len - 1];
            } else {
                $lps[$i] = 0;
                $i++;
            }
        }
    }
}


// echo escape_string("gghy'='1LIKE%_");
