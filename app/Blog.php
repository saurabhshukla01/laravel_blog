<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     //public $table = "blog";
     //protected $table = "blog";
     protected $fillable = [
        'title', 'description'
      ];

}
