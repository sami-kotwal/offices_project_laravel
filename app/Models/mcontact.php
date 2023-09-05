<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mcontact extends Model
{
    use HasFactory;

    // public static function boot() {
  
    //     parent::boot();
  
    //     static::created(function ($item) {
                
    //         $adminEmail = "samiullahkotwal36@gmail.com";
    //         Mail::to($adminEmail)->send(new ContactMail($item));
    //     });
    // }
}
