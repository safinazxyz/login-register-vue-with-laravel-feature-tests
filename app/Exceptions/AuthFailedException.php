<?php
namespace App\Exceptions;
use Exception;

class AuthFailedException extends Exception
{
    public function render() {
        return response()->json([
            'email' => '*This email is not correct!',
            'password' => '*This password is not correct!'
        ],422);
    }
}
