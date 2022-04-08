<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangeLanguageController extends Controller
{
    public $allowedLocales = ["en", "me"];

    public function __invoke(Request $request)
    {
        if($request->has('locale') && in_array($request->get('locale'), $this->allowedLocales)){
            session()->put('locale', $request->get('locale'));
        }
        return redirect()->route('course');
    }
}
