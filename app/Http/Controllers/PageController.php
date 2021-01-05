<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function showBackground(){
        return view('tugas0.background');
    }
    function showAbout(){
        return view('tugas0.about');
    }
    function showMethod(){
        return view('tugas0.method');
    }
    function showImpact(){
        return view('tugas0.impact');
    }
}
