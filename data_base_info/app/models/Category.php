<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('name');

    public function catposts()
    {
        return $this->hasMany('App\models\Post');
    }

}