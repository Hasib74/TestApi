<?php
namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;

trait ExceptionTrait{

    public function apiException($request,$exception){
        if($exception instanceof ModelNotFoundException){

            return response()->json([
                'errors' =>'Product Model not found'
            ],201);
        }

        if($exception instanceof NotFoundHttpException){
            return response()->json([
                'errors' =>'Incorect eoute'
            ],201);
        }

    }

}