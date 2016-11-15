<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public $timestamps = true;

    protected $fillable = ['name', 'content'];


}
