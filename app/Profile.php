<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
 //namespace App;
 {
    protected $guarded = array('id');
    // 以下を追記
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
     );
     
    //  8/19追記
    // profileモデルに関連付けする
    public function changelogs()
    {
        return $this->hasmany('App\Chagelog');
    }
}