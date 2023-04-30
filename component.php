<?php declare(strict_types=1);

if($_POST["function"] == "swap") {
    swap();
}

function swap() {
    echo 'new text';
}

if($_POST["function"] == "anotherSwap") {
    anotherSwap();
}

function anotherSwap() {
    echo 'MORE NEW TEXT!!!';
}