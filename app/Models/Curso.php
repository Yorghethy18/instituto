<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='cursos';
    protected $primarykey='id';
    protected $fillable=[
    	'codigo_curso','nombre_curso','creditos','horas','nombre_docente'
    ];

    public $timestamps=false;
}
