<?php

namespace App\Http\Controllers;

use App\Models\mcontact;
use Illuminate\Http\Request;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class ccontact extends Controller
{
    public function insertrecord(Request $req){

        $mydata = new mcontact();
        $mydata->name = $req->name;
        $mydata->email = $req->email;
        $mydata->number = $req->number;
        $mydata->country = $req->country;
        $mydata->project = $req->project;
        $mydata->message = $req->message;
        $mydata->save();
        $adminEmail = "samiullahkotwal36@gmail.com";
                 Mail::to($adminEmail)->send(new ContactMail($mydata));
        return redirect()->back() ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);

    }
}
