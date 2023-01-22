<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryRequest;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function postInquiry(InquiryRequest $request)
    {
        $validated = $request->validated();
        $request->session()->put('inquiry', $validated);
        return redirect()->route('confirm');
    }

    public function showConfirm(Request $request)
    {
        dd($request->session()->get('inquiry'));
    }
}
