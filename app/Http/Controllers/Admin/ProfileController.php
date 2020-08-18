<?php
// PHP/Laravelの課題08
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

// 8/18追記

use App\Changelogs;
use Carbon\Carbon;

class ProfileController extends Controller
{
     public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        // 以下を追記
      // Varidationを行う
      $this->validate($request, Profile::$rules);

      $profile = new Profile;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$profile->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $profile->image_path = basename($path);
      } else {
          $profile->image_path = null;
      }

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $profile->fill($form);
      $profile->save();

      return redirect('admin/profile/create');
  }
   public function index(Request $request)#8/17
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = News::where('title', $cond_title)->get();
      } else {
          $posts = News::all();
      }
      return view('admin.news.index', ['posts' => $posts, 'cond_title' => $cond_title]);#8/17
  }
  // 以下を追記8/17

  public function edit(Request $request)
  {
      // profile Modelからデータを取得する
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
  }


  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, profile::$rules);
      $profile = Profile::find($request->id);
      $profile_form = $request->all();
      if ($request->remove == 'true'){
          $profile_form['image_path'] = null;
      }elseif ($request->file('image')){
          $path = $request->file('image')->store('public/image');
          $profile_form['image_path'] = basename($path);
      }else{
          $profile_form['image_path'] = $profile->image_path;
      }
      
      unset($profile_form['_token']);
      unset($profile_form['image']);
      unset($profile_form['remove']);
      
      $profile->fill($profile_form)->save();
      
    //   8/18追記
      $changelog = new Changelogs;
      $changelog->profile_id = $profile->id;
      $changelog->edited_at = Carbon::now();
      $changelog->save();
      
    //   News Modelからデータを取得する
      $profile = Profile::find($request->id);
    //   送信されてきたフォームデータを格納する
       $profile_form = $request->all();
       if (isset($profile_form['image'])) {
         $path = $request->file('image')->store('public/image');
         $profile->image_path = basename($path);
         unset($profile_form['image']);
       } elseif (isset($request->remove)) {
         $profile->image_path = null;
         unset($profile_form['remove']);
         unset($profile_form['_token']);

    //   該当するデータを上書きして保存する
      $profile->fill($profile_form)->save();
       }
      return redirect('admin/profile');
       }
}
