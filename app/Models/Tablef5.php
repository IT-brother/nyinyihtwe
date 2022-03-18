<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablef5 extends Model
{
    use HasFactory;
    protected $table="tablef5";
    public $timestamps = false;
    protected $fillable=["КодКМ","КодСтатСтруктуры","КодДинСтруктуры","КодСтруктурыУвязки"];


}
