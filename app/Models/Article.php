<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_title','article_avatar','article_content','user_id ','article_categories_id','status'
    ];

    public function articleCategories(){
        return $this->belongsTo(ArticleCategory::class,'article_categories_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
