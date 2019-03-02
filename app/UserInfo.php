<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable=['user_id','photo','description'];

    public function evaluations(){
        return $this->hasMany('App/Evaluation','id','user_info_id');
    }

    use SoftDeletes;
    protected $dates=['deleted_at'];
}
