<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public $timestamps = true;    
    protected $table = 'articles';

    protected $fillable = ['article_name', 'author', 'english_text', 'japanese_text', 'russian_text']; 
    protected $guarded = ['created_at', 'updated_at'];
}
