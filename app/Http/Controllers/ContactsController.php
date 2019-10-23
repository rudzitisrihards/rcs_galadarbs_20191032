<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function submit(Request $request)
    {
        echo '<h1>Form submitted :)</h1>';
        var_dump($request->all());   
    }
}
