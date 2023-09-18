<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function petit_test() {
        return "Ceci est un test ";
    }
}
