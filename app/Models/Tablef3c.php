<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablef3c extends Model
{
    use HasFactory;
    protected $table ="tablef3c";
    protected $fillable=["Кодструктуры","КодПЗ1", "НаименованиеПЗ1", "Степеньформализации","СтатусПЗ1","СтруктурноеCвойствоПЗ1","ПримечаниеПЗ1"];
}
