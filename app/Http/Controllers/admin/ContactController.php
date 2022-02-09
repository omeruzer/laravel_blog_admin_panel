<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){

        $contacts = Contact::find(1);

        return view('admin.layouts.contacts.contacts',compact('contacts'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function update($id=1){

        $this->validate(request(),[
            'phone'     =>  'required',
            'email'     =>  'required',
            'address'   =>  'required',
        ]);
        
            
        $contacts = Contact::where('id',$id)->firstOrFail();
        $contacts->update([
            'phone'    =>  request('phone'),
            'email'    =>  request('email'),
            'address'  =>  request('address'),
        ]);

        return redirect()->route('admin.contact',$contacts->id)->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }}
