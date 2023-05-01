<?php declare(strict_types=1);

if(function_exists($_POST["function"])) {
    call_user_func($_POST["function"]);
}

function swap() {
    echo 'new text';
}

function increment() {
    $count = $_POST['value'];
    $count++;
    echo $count;
}