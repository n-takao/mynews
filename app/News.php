<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
    
    // 8/18追記以下文
    // Newモデルに関連付け
    public function histories()
    {
        return $this->hasMany('App\History');
    }
}