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
function calculate(int $x, int $y, string $action): float
{
    switch ($action) {
        case ACTION_PLUS:
            $res = $x + $y;
            break;
        case ACTION_MINUS:
            $res = $x - $y;
            break;
        case ACTION_MULTIPLICATION:
            $res = $x * $y;
            break;
        case ACTION_DIVISION:
            if (!$y) {
                throw new Exception('Cannot be divided by zero.');
            }
            $res = $x / $y;
            break;
    }

    if (!$x || !$y) {
      
    }
    return $res;
}

// Gallery
$images = ['img-1.jpg', 'img-2.jpg', 'img-3.jpg'];