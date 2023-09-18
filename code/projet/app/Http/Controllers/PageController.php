<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function __construct() {
    //     $this->middleware('admin');
    // }

    public function number(int $numero_page) {
        return "Je suis sur la page " . $numero_page;
    }


}
