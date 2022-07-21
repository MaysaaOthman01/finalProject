<?php


namespace App\Helpers;


class Helpers
{
    public static function createSuccessResponse($data){
        return [
         'isSuccessful' => true,
         'data' => $data
        ];
    }
    public static function createErrorResponse($message){
        return [
         'isSuccessful' => false,
         'message' => $message
        ];
    }
}
