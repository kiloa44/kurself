<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluationRate extends Model
{
    protected $fillable=["evaluation_id","user_id","rate"];
    use SoftDeletes;
    protected $dates=['deleted_at'];
}
