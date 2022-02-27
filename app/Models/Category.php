<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // use HasFactory;
    // public $timestamps = flase ;
    protected $fillable = [
        'name_category','title','status','created_at','updated_at'
    ];
    protected $primaryKey = 'id_category';
    protected $table = 'category';

}
