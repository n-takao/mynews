<?php
// PHP/Laravel08の課題
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function add()
    {
     return view('admin.profile.create');   
    }
    public function create()
    {
        return redirect('admin/profile/create');    
    } 
    public function edit()
    {
        return view('admin.profile.edit');
    }
    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
//コントローラーとは＝ モデルとビューの橋渡し役としてプログラム全体での制御を担当する部分
// ルートとは、ユーザーからのリクエストを受け取ってコントローラーに渡す役割と（コントローラーについては後述）、
// コントローラーから受け取った情報をユーザーへ返す役割を担う。いわば仲介人。

// PHP/Laravel09の課題

// 　1、URLとControllerやActionを紐付ける機能を何といいますか？　Routingという。
// 　2、あなたが考える、group化をすることのメリットを考えてみてください。　
// 　　 見えやすくすることによってミスをなくすなど、グループ分けで理解しやすいコードになるのか？という見解。
// 　3、「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。

　   
　       (answer) Route::get('admin/news/create', 'Admin\AAAController@bbb');
　       
　       