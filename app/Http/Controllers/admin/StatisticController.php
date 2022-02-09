<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index(){

        $bestpost = Article::orderByDesc('hit')->take(10)->get();


        return view('admin.layouts.statistics.index',compact('bestpost'));
    }
}