<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lect extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $keyType = 'string';
    public $timestamps=false; 
}
