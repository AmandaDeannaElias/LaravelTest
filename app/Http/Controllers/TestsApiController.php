<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Test;

class TestsApiController extends Controller
{
    public function index(){
        return Test::all();
    }
}
