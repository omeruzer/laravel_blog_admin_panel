<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    
    public function index(){

        $categories = Category::orderByDesc('id')->get();

        return view('admin.layouts.categories.categories',compact('categories'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function create(){

        if(request()->isMethod('POST')){

            $this->validate(request(),[
                'title'      =>  'required',
                'content'    =>  'required',
            ]);

            $category = request('title');

            $data = [
                'title'     =>  $category,
                'slug'      =>  Str::slug($category),
                'content'   =>  request('content'),
            ];

            $create = Category::create($data);

            return redirect()->route('admin.categories')->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
        }

        return view('admin.layouts.categories.create')->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function edit($id){

        $categories = Category::find($id);

        return view('admin.layouts.categories.form',compact('categories'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function save($id){

        $this->validate(request(),[
            'title'      =>  'required',
            'content'    =>  'required',
        ]);

        $title  =   request('title');

        $data = [
            'title'      =>  $title,
            'slug'       =>  Str::slug($title),
            'content'    =>   request('content'),
        ];        

        $save = Category::find($id);
        $save->update($data);

        return redirect()->route('admin.categories')->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
        
    }

    public function delete($id){
        Category::where('id',$id)->delete();

        return redirect()->back()->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

}
