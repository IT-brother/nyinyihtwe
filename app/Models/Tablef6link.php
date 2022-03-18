<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablef6link extends Model
{
    use HasFactory;
    protected $table="tablef6link";
    protected $primaryKey = "idtablef6";
    public $timestamps = false;
    protected $fillable=["idtablef6","КодПЗ1","СтруктурноеСвойствоПЗ1","КодПК","РольПК","СтруктурноеСвойствоПК","ОбъемноеСвойствоПК","ОсобаяРольПК"];
}
