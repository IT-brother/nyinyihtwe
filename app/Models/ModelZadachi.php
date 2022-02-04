<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelZadachi extends Model
{
    use HasFactory;
    protected $table = "modelzadachi";
    protected $fillable=["КодПрЗ","КодКМ"];

}
