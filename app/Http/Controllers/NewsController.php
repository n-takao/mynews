<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\HTML;

// 8/19
use App\News;


class NewsController extends Controller
{
     public function index(Request $riquest)
     {
         $posts = News::all()->sortByDesc('updated_at');
         
         if (count($posts)>0) {

         }else{
             $headline = null;
         }
          // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('news.index', ['headline' => $headline, 'posts' => $posts]);
     }
}
