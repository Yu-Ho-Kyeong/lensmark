<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LensMarkFile extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'lens_mark_files';
    protected $fillable = [
        'mark_no',
        'product_mark1',
        'product_mark2',
        'link',
        'created_at'
    ];
}
