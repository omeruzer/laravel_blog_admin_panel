<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthorController extends Controller
{

    public function index(){

        // $ip         =   $_SERVER['REMOTE_ADDR'];
        // $referance  =   $_SERVER['HTTP_REFERER'];
        // $language   =   substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
        // $url        =   $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        // $browser    =   substr($_SERVER['HTTP_USER_AGENT'],0,12);

        // Visitor::create([
        //     'ip'            =>      $ip,
        //     'referance'     =>      $referance,
        //     'language'      =>      $language,
        //     'url'           =>      $url,
        //     'browser'       =>      $browser
        // ]);

        $authors = Author::orderByDesc('id')->get();

        return view('admin.layouts.authors.authors',compact('authors'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function create(){

        if(request()->isMethod('POST')){

            $this->validate(request(),[
                'name'      =>  'required',
            ]);

            $data = [
                'name'  =>   request('name'),
            ];

            $create = Author::create($data);

            return redirect()->route('admin.authors')->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
        }

        return view('admin.layouts.authors.create')->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function edit($id){

        $authors = Author::find($id);

        return view('admin.layouts.authors.form',compact('authors'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function save($id){

        $this->validate(request(),[
            'name'      =>  'required',
        ]);


        $data = [
            'name'      =>  request('name'),
        ];        

        $save = Author::find($id);
        $save->update($data);

        return redirect()->route('admin.authors')->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
        
    }

    public function delete($id){
        Author::where('id',$id)->delete();

        return redirect()->back()->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

}
