<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name_product',
        'price',
        'quanlity',
        'title',
        'content',
        'id_category',
        'id_supplier',
        'image_product',
        'cpu_name',
        'ram_name',
        'disk_name',
        'card_name',
        'desktop_name'
    ];
    protected $primaryKey = 'id_product';
    protected $table = 'product';
}
