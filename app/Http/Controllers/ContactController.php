<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContactController;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function showContact()
    {
        return view('contact');
    }
}