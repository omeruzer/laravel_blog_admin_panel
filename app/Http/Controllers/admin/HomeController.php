<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Message;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function index(){

        $lastMonthVisitor   =   DB::select('SELECT DISTINCT ip FROM visitor WHERE created_at >= NOW() - INTERVAL 1 month');
        $lastWeekVisitor    =   DB::select('SELECT DISTINCT ip FROM visitor WHERE created_at >= NOW() - INTERVAL 7 day');
        $lastDayVisitor     =   DB::select('SELECT DISTINCT ip FROM visitor WHERE created_at >= NOW() - INTERVAL 1 day');

        $articles       =   Article::all()->count();
        $categories     =   Category::all()->count();
        $users          =   User::all()->count();
        $messages       =   Message::where('read',0)->count();
        $comments       =   Comment::all()->count();
        $admins         =   User::where('manager',1)->count();

        $ip         =   $_SERVER['REMOTE_ADDR'];
        $language   =   substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
        $url        =   $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $browser    =   substr($_SERVER['HTTP_USER_AGENT'],0,12);

        Visitor::create([
            'ip'            =>      $ip,
            'language'      =>      $language,
            'url'           =>      $url,
            'browser'       =>      $browser
        ]);

        $visitor = Visitor::distinct('ip')->orderByDesc('id')->get();

        return view('admin.home',compact('lastMonthVisitor','lastWeekVisitor','lastDayVisitor','admins','comments','articles','categories','users','messages','browser','visitor','ip','language','url'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function visitor(){

        Visitor::getQuery()->delete();

        return redirect()->back()->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }
}
