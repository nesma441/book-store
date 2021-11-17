<?php

namespace App\Http\Controllers;

use App\Http\Resources\catResource;
use App\Models\Cat;
use Illuminate\Http\Request;

class ApiController extends Controller
{

public function show($id)
{
    $cat=Cat::find($id)->get();
    return $cat;
    
}
public function index()
{
    $cats=Cat::all();
    return $cats;
}
}
