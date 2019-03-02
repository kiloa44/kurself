<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable=["user_id","title","type",'access_type_id',"contents"];

    public function evaluationRates(){
        return $this->hasMany('App/EvaluationRate','id','evaluation_rate_id');
    }
    public function comments(){
        return $this->hasMany('App/Comment',"id","comment_id");
    }
    public function shares(){
        return $this->hasMany("App/Share","id","share_id");
    }

    use SoftDeletes;
    protected $dates=['deleted_at'];
}
