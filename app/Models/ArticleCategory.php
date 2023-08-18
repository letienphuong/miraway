<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_categories_name','status'
    ];

    public function article(){
        return $this->hasMany(Article::class);
    }

}
