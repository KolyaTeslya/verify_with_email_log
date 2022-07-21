<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function main()
    {
        return view('main.index');
    }

    public function showContactForm()
    {
        return view('contact_form');
    }

    public function contactForm (ContactFormRequest $request)
    {
        Mail::to("example@mail.ru")->send(new ContactForm($request->validated()));

        return redirect("contacts");
    }

}
