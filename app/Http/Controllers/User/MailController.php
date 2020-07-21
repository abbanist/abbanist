<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\sendContact;
use App\Mail\sendEngiinProduct;
use Session;

class MailController extends Controller
{
    // function index()
    // {
    //  return view('send_email');
    // }

// Захиалга
    function send(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
           'phone'  =>  'required',
           'volNeededElement'  =>  'required',
        ]);

        $data = array(
// Calculator хэсэг
            'selectCar'      =>  $request->selectCar,
            // 'tire_width'      =>  $request->tire_width,
            // 'tire_height'      =>  $request->tire_height,
            // 'tire_diameter'      =>  $request->tire_diameter,1
            'volNeededElement'   =>   $request->volNeededElement,
            'volNeededElementBig'   =>   $request->volNeededElementBig,

// Захиалга хэсэг
            'delivery_in_city'      =>  $request->delivery_in_city,
            'delivery_out_city'      =>  $request->delievry_out_city,
            'install'      =>  $request->install,
            'phone'      =>  $request->phone,
        );

// return $data;
        
         Mail::to('info@bears.mn')->send(new SendMail($data));
        // Mail::to('batbaatp@gmail.com')->send(new SendMail($data));
      
        // flash('Your message has been sent!')->success();

        // return redirect()->back()->with('flash_message_success', 'Устгагдлаа');
        $request->session()->flash('success', 'Таны захиалгыг хүлээн авлаа');
        return redirect()->back();
    }



// Холбоо барих
    function sendContact(Request $request)
    {
        $this->validate($request, [
           'name' =>  'required',
           'email'  =>  'required|email',
           'phone'  =>  'required',
           'message' =>  'required',
        ]);

        $data = array(
            'name'      =>  $request->name,
            'phone'      =>  $request->phone,
            'email'      =>  $request->email,
            'message'   =>   $request->message,
        );


        // Mail::to('batbaatp@gmail.com')->send(new sendContact($data));
        // Mail::to('info@bears.mn')->send(new sendContact($data));

        Mail::to('info@bears.mn')->send(new sendContact($data));
      
        // flash('Your message has been sent!')->success();

        // return redirect()->back()->with('flash_message_success', 'Устгагдлаа');
        $request->session()->flash('success', 'Таны зурвасыг хүлээн авлаа');
        return redirect()->back();
    }


// Энгийн product
    function sendEngiinProduct(Request $request)
    {
        $this->validate($request, [
           'name' =>  'required',
           'phone'  =>  'required',
           'quantity'  =>  'required',
        ]);

        $data = array(
            'name'      =>  $request->name,
            'phone'      =>  $request->phone,
            'quantity'      =>  $request->quantity,
        );


        // Mail::to('info@bears.mn')->send(new sendEngiinProduct($data));
          Mail::to('info@bears.mn')->send(new sendEngiinProduct($data));
        // Mail::to('bearstrade.coltd@gmail.com')->send(new sendEngiinProduct($data));
        // flash('Your message has been sent!')->success();

        // return redirect()->back()->with('flash_message_success', 'Устгагдлаа');
        $request->session()->flash('success', 'Таны захиалгыг хүлээн авлаа');
        return redirect()->back();
    }
}
