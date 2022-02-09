<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class ArticleController extends Controller
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

        $articles = Article::orderByDesc('id')->get();

        return view('admin.layouts.articles.articles',compact('articles'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    } 

    public function create(){

        $categories = Category::all();

        $authors = Author::all();

        if(request()->isMethod('POST')){

            $this->validate(request(),[
                'title'     =>  'required',
                'category'  =>  'required',
                'author'    =>  'required',
                'keywords'  =>  'required',
                'desc'      =>  'required',
                'content'   =>  'required'
            ]);

            

            $title = request('title');

            $data = [
                'title'     =>  $title,
                'slug'      =>  Str::slug($title),
                'category'  =>  request('category'),
                'author'    =>  request('author'),
                'keywords'  =>  request('keywords'),
                'desc'      =>  request('desc'),
                'content'   =>  request('content')
            ];

            if(request()->hasFile('picture')){
                $this->validate(request(),[
                    'picture' => 'image|mimes:jpg,png,jpeg|max:2048',
                ]);
    
                $picture = request()->file('picture');
    
                $resimad = rand(0,9999) . "-" . time() . "." . $picture->extension();
    
                if($picture->isValid()){
    
                    $picture->move('assets/images/articles',$resimad);
    
                }

                $data['picture'] = $resimad;
    
            }

            $create = Article::create($data);

            return redirect()->route('admin.articles')->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
        }

        return view('admin.layouts.Articles.create',compact('categories','authors'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function edit($id){

        $articles = Article::find($id);

        $categories = Category::all();

        $authors = Author::all();

        return view('admin.layouts.articles.form',compact('articles','categories','authors'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function save($id){

        $this->validate(request(),[
            'title'     =>  'required',
            'category'  =>  'required',
            'author'    =>  'required',
            'keywords'  =>  'required',
            'desc'      =>  'required',
            'content'   =>  'required'
        ]);

        $title = request('title');

        $data = [
            'title'     =>  $title,
            'slug'      =>  Str::slug($title),
            'category'  =>  request('category'),
            'keywords'  =>  request('keywords'),
            'author'    =>  request('author'),
            'desc'      =>  request('desc'),
            'content'   =>  request('content')
        ];


        if(request()->hasFile('picture')){
            $this->validate(request(),[
                'picture' => 'image|mimes:jpg,png,jpeg|max:2048',
            ]);

            $picture = request()->file('picture');

            $picturename = rand(0,9999) . "-" . time() . "." . $picture->extension();

            if($picture->isValid()){

                $delete = Article::find($id);
                $trash = $delete->picture;
                $path = 'assets/images/articles/'.$trash;

                unlink($path); // Eski Resmi Dosyadan Siler

                $picture->move('assets/images/articles',$picturename); // Yeni Resmi Dosyaya Yükler

                $data['picture'] = $picturename;    // Resmi Veritabanına Ekler

            }
        }

        $save = Article::find($id);
        $save->update($data);

        return redirect()->route('admin.articles')->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
        

    }

    public function delete($id){

        $delete = Article::find($id);
        $trash = $delete->picture;
        $path = 'assets/images/articles/'.$trash;

        unlink($path); // Eski Resmi Dosyadan Siler

        Article::where('id',$id)->delete();


        return redirect()->back()->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }
}
