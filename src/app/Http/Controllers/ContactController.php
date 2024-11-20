<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only('first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3','address', 'building', 'category_id', 'detail');

        $genderCheck = [
            1 => '男性',
            2 => '女性',
            3 => 'その他',
        ];

         $category_name = [
            1 => '商品のお届けについて',
            2 => '商品の交換について',
            3 => '商品トラブル',
            4 => 'ショップへのお問い合わせ',
            5 => 'その他',
        ];

        $contact['gender'] = $genderCheck[$contact['gender']] ?? '未設定';
        $contact['category_id'] = $category_name[$contact['category_id']] ?? '未設定';
        $contact['tel'] = $request->tel1 . '-' . $request->tel2 . '-' . $request->tel3;;
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only('first_name', 'last_name', 'gender', 'email', 'tel','address', 'building', 'category_id', 'detail');
        Contact::create($contact);
        return view('thanks');
    }
}
