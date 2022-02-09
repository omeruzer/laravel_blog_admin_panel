<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){

        if(request()->isMethod('POST')){

            if(request()->isMethod('POST')){
                $this->validate(request(),[
                    'email' => 'required|email',
                    'password' => "required"
                ]);
    
                $credentials = [
                    'email' => request('email'),
                    'password' => request('password'),
                    'manager' => 1,
                ];
        
                if(Auth::attempt($credentials)){
                    return redirect()->route('admin.home');
                }else{
                    return redirect()->back()->withErrors([
                        'email' => 'E-mail veya Şifre Hatalı!'
                    ])->withInput();
                }
    
            }
    
        }
        return view('admin.login');

    }

    public function logout(){
        Auth::logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('admin.login');
    }

    public function index(){

        $users = User::orderByDesc('id')->get();

        return view('admin.layouts.users.users',compact('users'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function create(){

        if(request()->isMethod('POST')){

            $error = $this->validate(request(),[
                'name'      =>  'required',
                'email'     =>  'required|email',
                'password'  =>  'required|confirmed'
                
            ]);

            $data = [
                'name'  =>   request('name'),
                'email' =>  request('email'),
                'password'  =>  Hash::make(request('password'))
            ];

            if(request('manager')== 'on' ){
                $data['manager'] = 1;
            }else if(request('manager') == null){
                $data['manager'] = 0;
            }

            $create = User::create($data);

            return redirect()->route('admin.users')->withErrors($error)->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
        }

        return view('admin.layouts.users.create')->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function edit($id){

        $users = User::find($id);

        return view('admin.layouts.users.form',compact('users'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function save($id){

        $this->validate(request(),[
            'name'      =>  'required',
            'email'     =>  'required|email',
        ]);


        $data = [
            'name'      =>  request('name'),
            'email'     =>  request('email'),
        ];

        
        if(request('manager')== 'on' ){
            $data['manager'] = 1;
        }else if(request('manager') == null){
            $data['manager'] = 0;
        }
        

        $save = User::find($id);
        $save->update($data);

        return redirect()->route('admin.users')->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
        

    }

    public function delete($id){
        User::where('id',$id)->delete();

        return redirect()->back()->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }
}