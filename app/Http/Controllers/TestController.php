<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $message = 'Hello from Controller!';
        return view('test', compact('message'));
    }
}
