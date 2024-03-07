<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // simple_table page
    public function simple_tables(){
        return view('layouts.simple-tables');
    }

    // data_tables page
    public function data_tables(){
        return view('layouts.data-tables');
    }
}
