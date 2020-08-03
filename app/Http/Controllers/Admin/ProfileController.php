<?php

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