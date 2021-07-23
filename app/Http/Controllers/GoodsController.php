<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index(Request $request)
    {
        return $request->input('name');
        //return "App\Http\Controller\Goods";
    }
}
