<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        'http://www.project.com/slider/upload',
        'http://www.project.com/admingoods/upload',
        'http://www.project.com/admingoods/uploads',
    ];
}
