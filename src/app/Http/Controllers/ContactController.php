<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only('first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3','address', 'building',  'detail');
        // $contact['tel'] = $request->tel1 . '-' . $request->tel2 . '-' . $request->tel3;;

        return view('confirm', compact('contact'));
    }

    public function store(contactRequest $request)
    {
        $contact = $request->only('first_name', 'last_name', 'gender', 'email', 'tel','address', 'building', 'detail');
        $contact['tel'] = $request->tel1 . '-' . $request->tel2 . '-' . $request->tel3;;

        Contact::create($contact);
        return view('thanks');
    }
}
