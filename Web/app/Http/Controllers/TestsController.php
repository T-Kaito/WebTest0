<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    //testというviewファイルを表示して
    public function test(){
        return view('test');
    }
}
