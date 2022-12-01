<?php
function cartArray(){
    $cartCollections = \Cart::getContent();
    return $cartCollections->toArray();
}
