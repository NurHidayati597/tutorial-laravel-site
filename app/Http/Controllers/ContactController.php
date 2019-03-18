<?php

namespace App\Http\Controllers;

use Session;
use App\Notifications\SendContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    //show contact form page
    public function showForm() {
    	return view('contact.form');
    }

    //send email
    public function sendEmail(Request $request) {
    	
    	//validate
    	$this->validate($request, [
    		'name' => 'required|max:255|string',
    		'email' => 'required|email|max:255',
    		'message' => 'required'
    	]);

    	Notification::route('mail', 'test@gmail.com')
    					->notify(new SendContactNotification($request));

    	Session::flash('success', 'The email was sent successfully!');

    	return redirect()->route('pages.index');
    }
}
