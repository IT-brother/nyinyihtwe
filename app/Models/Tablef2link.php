<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablef2link extends Model
{
    use HasFactory;
    protected $table="tablef2link";
    protected $primaryKey = "idtablef2";
    public $timestamps = false;
    protected $fillable=[
        "idtablef2", "КлассСвязиПК", "КодПК_1", 
        "КодПК_2", "КодПК_3", "НаименованиеСвязиПК",
         "ТипСвязиПК", "ОценкаСвязиПК", "КодСвязиПК"
    ];
}
