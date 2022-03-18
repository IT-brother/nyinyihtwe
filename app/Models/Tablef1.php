<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablef1 extends Model
{
    use HasFactory;
    protected $table="tablef1";
    protected $primaryKey = "idtablef1";
    public $timestamps = false;
    protected $fillable=["idtablef1","Кодструктуры","КодПК", "НаименованиеПК", 
    "КлассПК", "ТипПК", "СтатусПК", "ОценкаПК","ПримечаниекПК"];

}
