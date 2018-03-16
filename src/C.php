<?php

echo array_reduce(range(1, 20), function ($result, $item) {
    return $result + $item;
}, 0);
