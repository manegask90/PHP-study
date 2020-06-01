<?php

error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use Services\Calculator;

$message = '';

if ($data = $_POST) {
    try {
        $calculator = new Calculator($data);
        $result = $calculator->calculate();

    } catch (Exception $e) {
        $message = $e->getMessage();
    }
}

?>

<form action="/" method="post">
    <span><?=$message;?></span>
    <input type="number" name="x">

    <select name="action">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="multiplication">*</option>
        <option value="division">/</option>
    </select>

    <input type="number" name="y" >
    <input type="submit" value="Go"> <?php if(isset($result)) echo 'Result : '.$result;?>
</form>




