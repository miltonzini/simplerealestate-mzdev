<?php

namespace App\Http\Controllers;

class ContactMessagesController extends Controller
{
    public function store()
    {
        request()->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'subject' => 'required|min:8',
            'content' => 'required|min:10'
        ]);

        return 'Data validated';
    }
}
