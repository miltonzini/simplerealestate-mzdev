<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property; // Importa el modelo Property

class PropertiesController extends Controller
{
    public function index()
    {
        $properties = Property::all(); 
        return view('properties', ['properties' => $properties]);
    }
}
