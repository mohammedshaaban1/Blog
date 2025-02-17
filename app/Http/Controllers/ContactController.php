<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use App\Http\Requests\StoreContactRequest;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request){
       
        $data= $request->validated();

        Contact::create($data);

        return back()->with('status-message','Your Message Sent Successfully');
     } 
}
