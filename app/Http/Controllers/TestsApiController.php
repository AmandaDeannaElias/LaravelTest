<?php

namespace App\Http\Controllers;
use App\Http\Resources\TestResource;
use Illuminate\Http\Request;
use App\Models\Test;

class TestsApiController extends Controller
{
    public function index(){
        return TestResource::collection(Test::all());
    }
}
