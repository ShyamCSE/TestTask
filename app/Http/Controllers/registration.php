<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registration extends Controller
{
    public function registarion(Request $request)
    {


        $contact = new User;
        $contact->name = $request->Name;
        $contact->email = $request->Email;
        $contact->password = $request->Password;

        $contact->save();
        return response()->json(['success' => 'Successfully']);
    }
}
