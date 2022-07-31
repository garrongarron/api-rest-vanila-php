<?php


router('/product', function(){ return Product::instance()->get();})('GET');
router('/product', function(){ return Product::instance()->post();})('POST');
router('/product', function(){ return Product::instance()->patch();})('PATCH');
router('/product', function(){ return Product::instance()->del();})('DELETE');

