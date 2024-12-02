<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::Paginate(8);

        return view('auth/admin', compact('contacts'));
    }

    public function find()
    {
        return view('auth/search', ['input' => '']);
    }

    public function search(Request $request)
    {
        $item = Contact::where('last_name', 'LIKE', '%{$request->input}%')->get();
        $contacts = [
            'input'  => $request->input,
            'item' => $request->$item,
        ];
        return view('auth/search', compact('contacts'));
    }
}
