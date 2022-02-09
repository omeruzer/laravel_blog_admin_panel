<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $guarded = [];


    public function getCategory(){
        return $this->hasOne('App\Models\Category','id','category');
    }

    public function getAuthor(){
        return $this->hasOne('App\Models\Author','id','author');
    }

}
