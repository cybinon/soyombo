<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Mail\SendMail;

class MainController extends Controller
{
    public function mail(){
        $request = request();
        if ($request->isMethod('post')) {

        $details = request()->validate([
            'sentMessage' => 'required'
        ]);

       // \Mail::to('info@soyomboprinting.com')->send(new SendMail($details));
        \Mail::to('nikorunikk@gmail.com')->send(new SendMail($details));
        return redirect('/');
    }else
    return redirect('/');
    }
}
