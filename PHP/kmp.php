<?php
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
