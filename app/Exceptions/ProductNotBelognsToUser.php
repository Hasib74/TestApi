<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelognsToUser extends Exception
{
    //
    public function rander(){
        return  [ 'data'=>'Product Not Belongs To User'];
    }
}
