<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=["evaluation_id",'comment_id'];

    use SoftDeletes;
    protected $dates=['deleted_at'];
}
