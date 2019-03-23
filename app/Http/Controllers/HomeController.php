<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class HomeController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('front.home');
    }

    public function getRegistration()
    {
        # code...
        return view('dashboard.register');

    }

    public function getLogin()
    {
        # code...
        return view('dashboard.login');

    }

    public function postContact(Request $request)
    {
        # code...
        $data = $request->all();

        $contact = Contact::create($data);

        $request->session()->flash('alert-success', "Message submitted, we would get back to you shortly...");
        return redirect()->back();
    }
}
