<?php

namespace App\Models\Super_Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nw extends Model
{
    use HasFactory;
    protected $table = 'news';
    
    const STATUS = [
        'active' => 1,
        'inactive' => 0
    ];
}
