<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $primaryKey ='u_id';
    protected $table = 'user';
    public $timestamps = false;
    protected $guarded = [];
}
