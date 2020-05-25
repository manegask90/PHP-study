<?php
function calculate($x, $y, $action)
{
  switch ($action) {
    case "+":
      $res = $x + $y;
      break;
    case "-":
      $res = $x - $y;
      break;
    case "*":
      $res = $x * $y;
      break;
    case "/":
      if ($y == 0) {
        $res = "Cannot be divided by zero";
      } else {
        $res = $x / $y;
      }
      break;
    default:
      $res = null;
  }

  return $res;
}