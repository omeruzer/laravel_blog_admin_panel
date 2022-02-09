<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){

        $messages = Message::orderByDesc('id')->get();

        return view('admin.layouts.messages.messages',compact('messages'));
    }

    public function read($id){

        $messages = Message::find($id);
        Message::where('id',$id)->update([
            'read'  =>  1
        ]);

        return view('admin.layouts.messages.read',compact('messages'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function delete($id){
        Message::where('id',$id)->delete();

        return redirect()->back()->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }
}
