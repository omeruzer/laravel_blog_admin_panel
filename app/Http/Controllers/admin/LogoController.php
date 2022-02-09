<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    public function index(){
        $logo = Setting::find(1);

        return view('admin.layouts.logo.logo',compact('logo'));
    }

    public function logo(){
            
        if(request()->hasFile('logo')){
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg|max:2048',
            ]);

            $logo = request()->file('logo');

            $resimad = rand(0,9999) . "-" . time() . "." . $logo->extension();

            if($logo->isValid()){

                $delete = Setting::find(1);
                $trash = $delete->logo;
                $path = 'assets/images/logo/'.$trash;

                unlink($path);

                $logo->move('assets/images/logo',$resimad);

                $logoupdate = Setting::find(1);
                $logoupdate->update([
                    'logo'  =>  $resimad
                ]);
            }

            return redirect()->route('admin.logo')->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
        }

        if(request()->hasFile('favicon')){
            $this->validate(request(),[
                'favicon' => 'image|mimes:jpg,png,jpeg|max:2048',
            ]);

            $favicon = request()->file('favicon');

            $faviconad = rand(0,9999) . "-" . time() . "." . $favicon->extension();

            if($favicon->isValid()){

                $delete = Setting::find(1);
                $trash = $delete->favicon;
                $path = 'assets/images/logo/'.$trash;

                unlink($path);

                $favicon->move('assets/images/logo',$faviconad);

                $faviconupdate = Setting::find(1);
                $faviconupdate->update([
                    'favicon'  =>  $faviconad
                ]);
            }

            return redirect()->route('admin.logo')->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
        }
    }

}
