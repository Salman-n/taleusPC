<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rakitan extends Model
{
    use HasFactory;
      protected $table = 'rakitan';
    protected $fillable = [
        'name',
        'data',
        'total'
    ];
}
