<?php

namespace App\Http\Controllers\EmailController;

use Ramsey\Uuid\Uuid;
use App\Mail\QuoteMail;
use App\Mail\CareerMail;
use App\Mail\PartnerMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\quoteMailRequest;
use App\Http\Requests\careerMailRequest;
use App\Http\Requests\partnerMailRequest;
use App\Mail\ReplyMail;

class EmailController extends Controller
{
    
    public function careerMail(careerMailRequest $request){

        if($request->hasFile('attachment')){
            $file = $request->file('attachment');
            $filename = now()->timestamp . '-'. Uuid::uuid4() .'.'. $file->extension();
            $file->storeAs('uploads/', $filename);
        }
       
        $career_mail = [
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'], 
            'email' => $request['email'],
            'contact_number' => $request['contact_number'],
            'position' => $request['position'],
            'branch' => $request['branch'],
            'cover_letter' => $request['cover_letter'],
            'attachment' => $filename ?? null
        ];

        Mail::send(new CareerMail($career_mail));
        Mail::send(new ReplyMail($career_mail));
        
        
        return redirect()->back()->with('success', ' Your Application has been received!');
        
    }

    public function partnerMail(partnerMailRequest $request){

        if($request->hasFile('attachment')){
            $file = $request->file('attachment');
            $filename = now()->timestamp . '-'. Uuid::uuid4() .'.'. $file->extension();
            $file->storeAs('uploads/', $filename);
        }

        $partner_mail = [
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'], 
            'email' => $request['email'],
            'company' => $request['company'],
            'position' => $request['position'],
            'branch' => $request['branch'],
            'subject' => $request['subject'],
            'service_offered' => $request['service_offered'],
            'attachment' => $filename ?? null
        ];

        Mail::send(new PartnerMail($partner_mail));
        Mail::send(new ReplyMail($partner_mail));
        

        return redirect()->back()->with('success', ' Your Application has been received!');
        
    }

    public function quoteMail(quoteMailRequest $request){

        if($request->hasFile('attachment')){
            $file = $request->file('attachment');
            $filename = now()->timestamp . '-'. Uuid::uuid4() .'.'. $file->extension();
            $file->storeAs('uploads/', $filename);
        }

        $quote_mail = [
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'], 
            'email' => $request['email'],
            'company' => $request['company'],
            'position' => $request['position'],
            'branch' => $request['branch'],
            'scope' => $request['scope'],
            'attachment' => $filename ?? null
        ];

        Mail::send(new QuoteMail($quote_mail));
        Mail::send(new ReplyMail($quote_mail));
        
        
        return redirect()->back()->with('success', ' Your Application has been received!');
        
    }
}
