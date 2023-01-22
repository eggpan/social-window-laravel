<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
    // ここから追加
    public function index()
    {
        // ここから編集
        return view('index');
        // ここまで編集
    }
    // ここまで追加
}
