<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    
    public function index(){

        $settings = Setting::find(1);

        return view('admin.layouts.settings.settings',compact('settings'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function update($id=1){

        $this->validate(request(),[
            'title'     =>  'required',
            'desc'      =>  'required',
            'keywords'  =>  'required',
            'author'    =>  'required'
        ]);
        
            
        $settings = Setting::where('id',$id)->firstOrFail();
        $settings->update([
            'title'     =>  request('title'),
            'desc'      =>  request('desc'),
            'keywords'  =>  request('keywords'),
            'author'    =>  request('author')
        ]);

        return redirect()->route('admin.setting',$settings->id)->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    

}
