<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * お気に入りするアクション。
     */
    public function store($id)
    {
        // 認証済みユーザがidの投稿をお気に入りする
        \Auth::user()->favor($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    /**
     * お気に入りを外すアクション。
     */
    public function destroy($id)
    {
        // 認証済みユーザがidの投稿のお気に入りを外す
        \Auth::user()->disfavor($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
