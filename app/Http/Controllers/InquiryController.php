<?php

namespace App\Http\Controllers;

use App\Mail\InquiryMail;
use App\Http\Requests\InquiryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $sessionData = $request->session()->get('inquiry');
        $message = view('emails.inquiry', $sessionData);
        return view('confirm', ['message' => $message]);
    }

    public function postConfirm(Request $request)
    {
        $sessionData = $request->session()->get('inquiry');
        $request->session()->forget('inquiry');

        Mail::to($sessionData['email'])
            ->send(new InquiryMail($sessionData));

        return redirect()->route('sent');
    }

    public function showSentMessage()
    {
        return view('sent');
    }
}
