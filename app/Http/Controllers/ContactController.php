<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Contact;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMessage(Request $request)
    {
      $request->validate([
        'contact_name'=>'required',
        'contact_email'=> 'required',
        'contact_comments' => 'required'
      ]);
      $contact = new Contact([
        'contact_name' => $request->get('contact_name'),
        'contact_email'=> $request->get('contact_email'),
        'contact_comments'=> $request->get('contact_comments')
      ]);
      var_dump($contact);
      $contact->save();
      return redirect('/home')->with('success', 'Contact info has been saved!!!');
    }    
}