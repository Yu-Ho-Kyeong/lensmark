<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LensMark extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'lens_marks';
    protected $fillable = [
        'classification',
        'manufacturer',
        'product_name',
        'refractive_index',
        'keyword'
    ];
}
