<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aula extends Model
{
    use SoftDeletes;
    
    protected $table = 'aula';

    // protected $primaryKey = 'idaula'; // se quiser definir a primary key
}