<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vtv extends Model
{
    protected $table = 'vtv';

    protected $fillable = [
        'title',
        'yt_id',
        'link',
        'category_id',
        'description',
        'link_mp4',
        'Ins',
        'source',
        'tags'
    ];
}
