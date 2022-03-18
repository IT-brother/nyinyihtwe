<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablef3link extends Model
{
    use HasFactory;
    protected $table="tablef3link";
    protected $primaryKey = "idtablef3";
    public $timestamps = false;
    protected $fillable=["idtablef3","КодПЗ1","НаименованиеПЗ","Степеньформализации","СтатусПЗ1","СтруктурноеСвойствоПЗ1","ПримечаниеПЗ1"];

}
