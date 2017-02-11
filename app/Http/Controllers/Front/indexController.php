<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        echo 'This is a good start。';
        echo phpinfo();
    }
}
