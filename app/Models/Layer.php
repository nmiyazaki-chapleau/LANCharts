<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layer extends Model
{
    use HasFactory;
    protected $table = 'layers';
    //public $incrementing = true;
    protected $fillable = ['ID', 'Name', 'Position'];
}
