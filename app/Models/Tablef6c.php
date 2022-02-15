<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablef6c extends Model
{
    use HasFactory;
    protected $table ="tablef6c";
    protected $fillable =["Кодструктуры","КодПЗ1","СтруктурноеСвойствоПЗ1","КодПК","РольПК","СтруктурноеСвойствоПК","ОбъемноеСвойствоПК","ОсобаяРольПК"];
}
