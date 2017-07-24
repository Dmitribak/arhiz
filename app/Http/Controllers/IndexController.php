<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Контроллер для главной страницы
    public function Index(){
        return view('index');
    }

}
