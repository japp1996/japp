<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function change($lang,Request $request) {
        \Cookie::queue("JappLang", $lang, 2628000);
        return Back();
    }
}
