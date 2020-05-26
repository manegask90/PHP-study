<?php

const ACTION_PLUS           = 'plus';
const ACTION_MINUS          = 'minus';
const ACTION_MULTIPLICATION = 'multiplication';
const ACTION_DIVISION       = 'division';

/**
 *
 * Calculate two int numbers depends on action.
 *
 * @param $x
 * @param $y
 * @param $action
 *
 * @return float
 *
 * @throws Exception
 */
function calculate($x,  $y, $action): float
{
    switch ($action) {
        case "plus":
            $res = $x + $y;
            break;
        case "minus":
            $res = $x - $y;
            break;
        case "multiplication":
            $res = $x * $y;
            break;
        case "division":
            if (!$y) {
                throw new Exception('Cannot be divided by zero.');
            }
            $res = $x / $y;
            break;
    }

    return $res;
}