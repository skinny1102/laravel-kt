<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    // use HasFactory;
    // public $timestamps = flase ;
    protected $fillable = [
        'nam_supplier','status'
    ];
    protected $primaryKey = 'id_supplier';
    protected $table = 'supplier';

}
