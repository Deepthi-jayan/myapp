<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;

class ClassesController extends Controller
{
    //


    function Index()
    {
    	return Classes::all();
    }
}
