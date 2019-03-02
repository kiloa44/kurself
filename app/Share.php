<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $fillable=['user_id','evaluation_id','access_type_id'];
    use SoftDeletes;
    protected $dates=['deleted_at'];

}
