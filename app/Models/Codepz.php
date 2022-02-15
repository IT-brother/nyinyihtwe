<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codepz extends Model
{
    use HasFactory;
    protected $table ="codepz";
    protected $fillable =["КодПЗ1"];
}
