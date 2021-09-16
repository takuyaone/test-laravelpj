<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function create(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $Contact = new Contact;
        $form = $request->all();
        unset($form['_token_']);
        $Contact->fill($form)->save();
        return redirect('/');
    }
}
