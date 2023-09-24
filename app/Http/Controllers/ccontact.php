<?php

namespace App\Http\Controllers;

use App\Models\mcontact;
use Illuminate\Http\Request;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ccontact extends Controller
{
    public function insertrecord(Request $req)
    {

        $validate = $req->validate(
            [
                'name' => 'required',
                'email' => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'number' => 'required',
                'country' => 'required',
                'project' => 'required',
                'message' => 'required',
            ]
        );

        $mydata = new mcontact();
        $mydata['name'] = $validate['name'];
        $mydata['email'] = $validate['email'];
        $mydata['number'] = $validate['number'];
        $mydata['country'] = $validate['country'];
        $mydata['project'] = $validate['project'];
        $mydata['message'] = $validate['message'];
        // $mydata->name = $validate->name;
        // $mydata->email = $validate->email;
        // $mydata->number = $validate->number;
        // $mydata->country = $validate->country;
        // $mydata->project = $validate->project;
        // $mydata->message = $validate->message;
        $mydata->save();
        $adminEmail = "phitechs@phitechsol.com";
        Mail::to($adminEmail)->send(new ContactMail($mydata));
        return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
