<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //第一引数が相手型のクラス、第二引数が中間テーブル名、第3引数が自分のidが入るカラム名、第四引数が相手のidが入るカラム名
    public function favarite_users(){
        return $this->belongsToMany(User::class, 'favarites', 'micropost_id', 'user_id')->withTimestamps();
    }
}
