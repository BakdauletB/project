<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capp extends Model
{
    use HasFactory;

    protected $table = "capps";
    protected $fillable = ['name', 'password'];

    
}
