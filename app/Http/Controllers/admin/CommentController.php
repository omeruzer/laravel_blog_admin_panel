<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){

        $comments = Comment::orderByDesc('id')->get();

        return view('admin.layouts.comments.comments',compact('comments'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }

    public function read($id){

        $comments = Comment::find($id);
        

        return view('admin.layouts.comments.read',compact('comments'))->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }



    public function delete($id){
        Comment::where('id',$id)->delete();

        return redirect()->back()->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
    }
}
