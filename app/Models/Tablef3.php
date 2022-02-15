<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablef3 extends Model
{
    use HasFactory;
    protected $table = "tablef3";
    protected $fillable =["Кодструктуры","КодПЗ1","НаименованиеПЗ","Степеньформализации","СтатусПЗ1","СтруктурноеСвойствоПЗ1","ПримечаниеПЗ1"];
}
