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
            'infotype' => 'required',
            'username' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'addition' => '',
            'proprice' => '',
            'file' => 'max:25600',
        ]);

        if(isset($request->file)){
            $fileName = time().'.'.$request->file->getClientOriginalExtension();
            $request->file->move(public_path('/shared'), $fileName);

            $details['file'] = url('/shared/'.$fileName);
        }else{
            $details['file'] = "Файл хавчуулагдаагүй";
        }
        if($details['infotype'] == 'price') \Mail::to('sales@soyomboprinting.com')->send(new SendMail($details));
        if($details['infotype'] == 'hr') \Mail::to('hr@soyomboprinting.com')->send(new SendMail($details));
        if($details['infotype'] == 'source') \Mail::to('design@soyomboprinting.com')->send(new SendMail($details));
        if($details['infotype'] == 'other') \Mail::to('info@soyomboprinting.com')->send(new SendMail($details));

        \Mail::to('nikorunikk@gmail.com')->send(new SendMail($details));

        return redirect('/?success');
    }else
    return redirect('/?failed');
    }
}
