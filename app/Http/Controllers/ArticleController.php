<?php

namespace App\Http\Controllers;

use App\Http\Mail\NewArticleNotification;
use App\Models\ArticleCategory;
use App\Models\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    //
    public function createArticle()
    {
        $article_categories = ArticleCategory::where('status',1)->orderBy('id','DESC')->get();
        return view('articles.create',compact('article_categories'));

    }

    public function saveArticle(Request $request)
{
    if (!Auth::guard('users')->check()) {
        return response()->json(['success' => false, 'message' => 'Bạn cần đăng nhập để viết bài'])->withHeaders(['Access-Control-Allow-Origin' => '*']);
    }
    $user = Auth::guard('users')->user();

    if ($request->hasFile('article_avatar')) {
        $file = $request->file('article_avatar');
        $path = $file->store('public/images/avatar');
        $article_avatar = Storage::url($path);
    } else {
        $article_avatar = null;
    }

    $article = $user->articles()->create([
        'article_title' => $request->article_title,
        'article_avatar' => $article_avatar,
        'article_content' => $request->article_content,
        'article_categories_id' => $request->article_categories_id,
    ]);
    $subscribers = Reader::all();
    foreach ($subscribers as $subscriber) {
        Mail::send('layouts.emails.new_article', compact('article'), function ($email) use ($subscriber) {
            $email->subject('Miraway - Bài viết mới');
            $email->to($subscriber->email);
        });
    }

    return response()->json(['success' => true, 'message' => 'Bài viết đã được tạo thành công', 'article' => $article])->withHeaders(['Access-Control-Allow-Origin' => '*']);
}


}
