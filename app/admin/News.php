<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $primaryKey ='n_id';
    protected $table = 'news';
    public $timestamps = false;
    protected $guarded = [];
}
