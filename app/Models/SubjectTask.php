<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectTask extends Model
{
    use HasFactory;
    protected $table = "subjecttask";
    protected $fillable=["КодПрЗ","НаименованиеПрЗ","КоличествоСтатКМвПрЗ"];
}
