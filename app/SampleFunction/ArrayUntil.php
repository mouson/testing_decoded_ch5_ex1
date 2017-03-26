<?php

function array_until($stopPoint, $arr)
{
    $index = array_search($stopPoint, $arr);

    return array_slice($arr, 0, $index);
}
