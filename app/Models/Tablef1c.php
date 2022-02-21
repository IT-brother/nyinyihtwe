<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablef1c extends Model
{
    use HasFactory;
    protected $table= "tablef1c";
    protected $fillable=["Кодструктуры", "КодПК", "НаименованиеПК", "КлассПК", "ТипПК", "СтатусПК", "ОценкаПК", "ПримечаниекПК"];
}
