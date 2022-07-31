<?php

router('/product', function () use (&$request) {
    $request = Product::instance();
});
