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
            $i = 0;
            foreach($request->file('file') as $file){
                $fileName = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('/shared'), $fileName);

                $details['file'][$i] = url('/shared/'.$fileName);
                $i++;
            }
        }else{
            $details['file'][0] = "Файл хавчуулагдаагүй";
        }
        if($details['infotype'] == 'price') \Mail::to('sales@soyomboprinting.com')->send(new SendMail($details));
        if($details['infotype'] == 'hr') \Mail::to('hr@soyomboprinting.com')->send(new SendMail($details));
        if($details['infotype'] == 'source') \Mail::to('design@soyomboprinting.com')->send(new SendMail($details));
        if($details['infotype'] == 'other') \Mail::to('info@soyomboprinting.com')->send(new SendMail($details));

        // \Mail::to('nikorunikk@gmail.com')->send(new SendMail($details));

        return redirect('/?success');
    }else
    return redirect('/?failed');
    }
}
