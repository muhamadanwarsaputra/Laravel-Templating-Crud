<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;




class ContentsController extends Controller
{
    //function index()
    function index()
    {
        $data = Content::paginate();
        return view('contents.index', compact('data'));
    }
}

