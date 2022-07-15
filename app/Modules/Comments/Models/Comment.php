<?php


namespace App\Modules\Comments\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'comment',
        'post_id',
        'user_id'];

}
