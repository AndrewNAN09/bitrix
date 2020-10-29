<?php


function debug($a){
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}

file_put_contents(__DIR__.'/1.txt', print_r($asResult, true), FILE_APPEND);