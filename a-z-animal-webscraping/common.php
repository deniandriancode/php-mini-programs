<?php

function display($node)
{
    $node->each(function ($item) {
        echo $item->text().PHP_EOL;
    });
}

?>
