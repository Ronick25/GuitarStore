<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
    	$request = request(array('name', 'email', 'subject', 'phone_number', 'message'));
    	if(!empty($request)) {
	    	$emailTo = 'moya_pochta@programmist.com'; //Сюда введите Ваш email
	 		$body = "Name:".$request['name']."Email:".$request['email']."Subject:".$request['subject']."Phone_number:".$request['phone_number']."Message:".$request['message'];
	  		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $request['email'];
	 		mail($emailTo, $request['subject'], $body, $headers);
	  		$emailSent = true;
	  	}
    	return view('contact');
    }
}
