<?php

namespace App\Controllers;

class Catalog extends BaseController
{
    public function index(){
        echo 'lol';
    }
    public function kek(){
        echo 'kek';
    }
    public function productLookUp($product_id){
        echo $product_id;
        echo 'Without ID CALLED';
    }
    public function productLookUpById($product_id){
        echo $product_id;
        echo 'WITH ID CALLED';
    }
}