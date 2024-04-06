<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function show($id)
    {
        $property = Property::find($id);

        if (!$property) {
            abort(404);
        }

        return view('property', ['property' => $property]);
    }
}

