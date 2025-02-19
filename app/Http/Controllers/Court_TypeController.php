<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Court_Type;


class Court_TypeController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Court_Type::all();
        return $types;
        return view('mcourt_type');
    }

    public function store()
    {

    }
   
}
