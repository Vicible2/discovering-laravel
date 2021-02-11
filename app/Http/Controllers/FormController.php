<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class FormController extends Controller
{
    public function loadFormView(){
        return view('form');
    }
    //store data in database through eloquent
    public function store(){
        request()->validate([
            'name'=> ['required']
            ]);
        $test = new Test
    }

}
