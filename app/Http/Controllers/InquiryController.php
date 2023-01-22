<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryRequest;

class InquiryController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function postInquiry(InquiryRequest $request)
    {
        return 'ok';
    }
}
