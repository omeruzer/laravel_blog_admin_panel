<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SocaialMedia;
use Illuminate\Http\Request;

class SocialMedaiController extends Controller
{
    public function index(){

        $socialmedia = SocaialMedia::find(1);

        return view('admin.layouts.socialmedia.socialmedia',compact('socialmedia'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function update($id=1){

        // $this->validate(request(),[
        //     'instagram'     =>  'required',
        //     'twitter'       =>  'required',
        //     'facebook'      =>  'required',
        // ]);
        
            
        $socialmedia = SocaialMedia::where('id',$id)->firstOrFail();
        $socialmedia->update([
            'facebook'     =>  request('facebook'),
            'twitter'      =>  request('twitter'),
            'instagram'  =>  request('instagram'),
        ]);

        return redirect()->route('admin.socialmedia',$socialmedia->id)->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

}
