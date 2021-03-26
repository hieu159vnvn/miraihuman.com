<?php
function strMiddleReduceWordSensitive($string, $max = 50, $rep = '[...]') {
    $strlen = strlen($string);
     
     if ($strlen <= $max)
     return $string;
      
    $lengthtokeep=$max - strlen($rep);
    $start = 0;
    $end = 0;
      
     if (($lengthtokeep % 2) == 0) {
        $start = $lengthtokeep / 2;
        $end = $start;
    } else {
        $start = intval($lengthtokeep / 2)+2;
        $end = $start - 5;
    }
    $i = $start;
    $tmp_string = $string;
    while ($i < $strlen) {
        if (isset($tmp_string[$i]) and $tmp_string[$i] == ' ') {
            $tmp_string = mb_substr($tmp_string, 0, $i,'UTF-8') . $rep;
            $return = $tmp_string;
        }
        $i++;
    }
     
    $i = $end;
    $tmp_string = strrev ($string);
    while ($i < $strlen) {
        if (isset($tmp_string[$i]) and $tmp_string[$i] == ' ') {
            $tmp_string = mb_substr($tmp_string, 0, $i,'UTF-8');
            $return .= strrev ($tmp_string);
        }
        $i++;
    }
    if(isset($return)) return $return;
    return mb_substr($string, 0, $start,'UTF-8') . $rep . mb_substr($string, - $end,'UTF-8');
 }

 function urlfile($linkfile){
    return "http://noibo.miraihuman.com".$linkfile;
 }