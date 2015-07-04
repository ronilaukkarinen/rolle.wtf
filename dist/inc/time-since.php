<?php
    function aika($older_date, $newer_date = false)  {

    // Array of time period chunks
    $chunks = array(
    array(60 * 60 * 24 * 365 , 'year'),
    array(60 * 60 * 24 * 30 , 'month'),
    array(60 * 60 * 24 * 7, 'week'),
    array(60 * 60 * 24 , 'day'),
    array(60 * 60 , 'hour'),
    array(60 , 'minute'),
    );

    $i = 0;
    $since = $newer_date - $older_date;
    for ($i = 0, $j = count($chunks); $i < $j; $i++)
        {
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];
        if (($count = floor($since / $seconds)) != 0)
            {
            break;
            }
        }
    if ($count > 1 & $name == "day") {
    $output = ($count == 1) ? '1 '.$name : "$count {$name}s";
    } elseif ($count > 1 & $name == "year") {
    $output = ($count == 1) ? '1 '.$name : "$count years";
        } elseif ($count > 1 & $name == "month") {
        $output = ($count == 1) ? '1 '.$name : "$count months";
    } else {
    $output = ($count == 1) ? '1 '.$name : "$count {$name}s";
    }
    if ($i + 1 < $j)
        {
        $seconds2 = $chunks[$i + 1][0];
        $name2 = $chunks[$i + 1][1];
        
        if (($count2 = floor(($since - ($seconds * $count)) / $seconds2)) != 0)
            {
    if ($count2 > 1 & $name2 == "day") {
    $output .= ($count2 == 1) ? ', 1 '.$name2 : ", $count2 {$name2}s";
    } elseif ($count2 > 1 & $name2 == "month") {
    $output .= ($count2 == 1) ? ', 1 '.$name2 : ", $count2 months";
    } else {
     $output .= ($count2 == 1) ? ', 1 '.$name2 : ", $count2 {$name2}s";
    }
             
            }

    return ' '.$output.' ';
        }
    }